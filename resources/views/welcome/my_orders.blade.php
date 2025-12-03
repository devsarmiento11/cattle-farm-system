<!DOCTYPE html>
<html lang="en">
<head>
    @include('welcome.css')
    <title>My Orders</title>
    <style>
        .orders-section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .orders-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .order-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .order-image {
            flex: 0 0 150px;
            text-align: center;
        }

        .order-image img {
            width: 100%;
            max-width: 150px;
            height: auto;
            border-radius: 8px;
        }

        .order-details {
            flex: 1;
            min-width: 300px;
        }

        .order-details h3 {
            color: #333;
            margin-bottom: 10px;
        }

        .order-details p {
            margin: 5px 0;
            color: #555;
        }

        .order-status {
            flex: 0 0 150px;
            text-align: center;
        }

        .status-badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 12px;
        }

        .status-pending {
            background-color: #ffc107;
            color: #212529;
        }

        .status-processing {
            background-color: #17a2b8;
            color: white;
        }

        .status-completed {
            background-color: #28a745;
            color: white;
        }

        .status-cancelled {
            background-color: #dc3545;
            color: white;
        }

        .rate-button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .rate-button:hover {
            background-color: #0056b3;
        }

        .no-orders {
            text-align: center;
            color: #666;
            font-size: 18px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    @include('welcome.header')

    <section class="orders-section">
        <h2>My Orders</h2>

        @if($orders->count() > 0)
            @foreach($orders as $order)
                <div class="order-card">
                    <div class="order-image">
                        @if($order->product_image)
                            <img src="{{ asset('products/' . $order->product_image) }}" alt="{{ $order->product_title }}">
                        @else
                            <p>No Image</p>
                        @endif
                    </div>
                    <div class="order-details">
                        <h3>{{ $order->product_title }}</h3>
                        <p><strong>Price:</strong> ₱{{ number_format($order->product_price, 2) }}</p>
                        <p><strong>Quantity:</strong> {{ $order->quantity }}</p>
                        <p><strong>Total:</strong> ₱{{ number_format($order->price, 2) }}</p>
                        @php
                            $methods = ['cod' => 'Cash on Delivery', 'pick_up' => 'Pick up'];
                        @endphp
                        <p><strong>Payment Method:</strong> {{ $methods[$order->payment_method] ?? ucfirst(str_replace('_', ' ', $order->payment_method)) }}</p>
                        <p><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y H:i') }}</p>
                        <p><strong>Address:</strong> {{ $order->address }}</p>
                    </div>
                    <div class="order-status">
                        <span class="status-badge status-{{ strtolower($order->status) }}">
                            {{ ucfirst($order->status) }}
                        </span>
                        @php
                            $existingReview = \App\Models\Review::where('order_id', $order->id)->first();
                        @endphp
                        @if(!$existingReview && $order->status == 'completed')
                            <br><br>
                            <a href="{{ url('/rate/'.$order->id) }}" class="rate-button">Rate Product</a>
                        @elseif($existingReview)
                            <br><br>
                            <span style="color: green; font-weight: bold;">Already Rated</span>
                        @endif
                    </div>
                </div>
            @endforeach
        @else
            <p class="no-orders">You haven't placed any orders yet.</p>
        @endif
    </section>

    @include('welcome.footer')
</body>
</html>
