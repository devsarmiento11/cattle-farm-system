<!DOCTYPE html>
<html lang="en">
<head>
    @include('welcome.css')
    <title>Order Successful</title>
    <style>
        .success-section {
            max-width: 900px;
            margin: 40px auto;
            padding: 24px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .success-title {
            color: #28a745;
            margin-bottom: 16px;
        }
        .order-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: inline-block;
            text-align: left;
        }
        .order-row { margin: 6px 0; }
        .order-label { font-weight: bold; color: #555; }
        .actions { margin-top: 20px; }
        .btn { display: inline-block; padding: 10px 16px; border-radius: 4px; text-decoration: none; }
        .btn-primary { background: #007bff; color: #fff; }
        .btn-secondary { background: #6c757d; color: #fff; }
        .product-image { max-width: 200px; height: auto; border-radius: 6px; display: block; margin-bottom: 12px; }
    </style>
</head>
<body>
@include('welcome.header')

<section class="success-section">
    <h2 class="success-title">Thank you! Your order has been placed.</h2>

    <div class="order-card">
        @if($order->product_image)
            <img class="product-image" src="{{ asset('products/' . $order->product_image) }}" alt="{{ $order->product_title }}">
        @endif
        <div class="order-row"><span class="order-label">Product:</span> {{ $order->product_title }}</div>
        <div class="order-row"><span class="order-label">Price:</span> ₱{{ number_format($order->product_price, 2) }}</div>
        <div class="order-row"><span class="order-label">Quantity:</span> {{ $order->quantity }}</div>
        <div class="order-row"><span class="order-label">Total:</span> ₱{{ number_format($order->price, 2) }}</div>
        <div class="order-row"><span class="order-label">Payment Method:</span> {{ ucfirst(str_replace('_',' ',$order->payment_method)) }}</div>
        <div class="order-row"><span class="order-label">Status:</span> {{ ucfirst($order->status) }}</div>
        <div class="order-row"><span class="order-label">Order Date:</span> {{ $order->created_at->format('M d, Y H:i') }}</div>
        <div class="order-row"><span class="order-label">Delivery Address:</span> {{ $order->address }}</div>
    </div>

    <div class="actions">
        <a href="/" class="btn btn-secondary">Continue Shopping</a>
        @auth
            <a href="{{ route('my.orders') }}" class="btn btn-primary">Go to My Orders</a>
        @else
            <span style="display:block;margin-top:10px;color:#555;">Create an account or log in with the same email ({{ $order->email }}) to manage your orders.</span>
        @endauth
    </div>
</section>

@include('welcome.footer')
</body>
</html>
