<!DOCTYPE html>
<html lang="en">
<head>
    @include('welcome.css')
    <title>Checkout - {{ $product->title }}</title>
    <style>
        .checkout-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .checkout-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .checkout-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .product-summary {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .product-summary h3 {
            color: #333;
            margin-bottom: 15px;
        }

        .checkout-product-image {
            width: 100%;
            max-width: 300px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-info h4 {
            color: #333;
            margin-bottom: 10px;
        }

        .product-info p {
            margin: 5px 0;
            color: #555;
        }

        .checkout-form {
            flex: 1;
            min-width: 300px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .checkout-form h3 {
            color: #333;
            margin-bottom: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }

        .btn-checkout {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-checkout:hover {
            background-color: #218838;
        }

        .btn-shipping-fee {
            padding: 8px 16px;
            background-color: #6c757d;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-shipping-fee:hover {
            background-color: #5a6268;
        }

        .btn-shipping-fee.selected {
            background-color: #28a745;
        }

        .btn-shipping-fee.selected:hover {
            background-color: #218838;
        }

        @media (max-width: 768px) {
            .checkout-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    @include('welcome.header')

    <section class="checkout-section">
        <h2>Checkout</h2>
        <div class="checkout-container">
            <div class="product-summary">
                <h3>Product Details</h3>
                <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}" class="checkout-product-image" />
                <div class="product-info">
                    <h4>{{ $product->title }}</h4>
                    <p><strong>Price:</strong> ₱{{ number_format($product->price, 0) }}</p>
                    <p><strong>Age:</strong> {{ $product->age }}</p>
                    <p><strong>Weight:</strong> {{ $product->weight }} kg</p>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <p><strong>Category:</strong> {{ $product->category }}</p>
                </div>
            </div>

            <div class="checkout-form">
                <h3>Billing Information</h3>
                <form action="{{ route('complete') }}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Delivery Address</label>
                        <textarea id="address" name="address" required></textarea>
                    </div>
                    @if ($errors->any())
                    <div class="error-message">
                        <strong>Errors:</strong>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        <label for="payment_method">Payment Method</label>
                        <select id="payment_method" name="payment_method" required>
                            <option value="">Select Payment Method</option>

                            <option value="cod" {{ old('payment_method') == 'cod' ? 'selected' : '' }}>Cash on Delivery</option>
                            <option value="pick_up" {{ old('payment_method') == 'pick_up' ? 'selected' : '' }}>Pick up</option>

                        </select>
                        @error('payment_method')
                        <div class="error-message">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group" style="margin-bottom: 10px;">
                        <button type="button" id="shipping_fee_btn" class="btn-shipping-fee" onclick="toggleShippingFee()">Plus shipping fee</button>
                        <input type="hidden" id="shipping_fee" name="shipping_fee" value="no">
                    </div>
                    <div class="form-group">
                        <label for="notes">Additional Notes</label>
                        <textarea id="notes" name="notes"></textarea>
                    </div>

                    

                    <button type="submit" class="btn-checkout">Complete Purchase</button>
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1"> <!-- Assuming quantity is 1 for now, can be made dynamic -->
                </form>
            </div>
        </div>
    </section>

    @include('welcome.footer')

    <script>
        function toggleShippingFee() {
            const btn = document.getElementById('shipping_fee_btn');
            const hiddenInput = document.getElementById('shipping_fee');
            if (btn.classList.contains('selected')) {
                btn.classList.remove('selected');
                hiddenInput.value = 'no';
            } else {
                btn.classList.add('selected');
                hiddenInput.value = 'yes';
            }
        }
    </script>
</body>
</html>
