<section class="container">
        <h5 class="mb-3">AVAILABLE CATTLES</h5>
        <div class="available-cattles">
            @foreach($products as $product)
            <div class="cattle-card">
                <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}" />
                <div class="cattle-name">{{ $product->title }}</div>
                <div class="cattle-price">Price: ₱{{ number_format($product->price, 0) }}</div>
                <div class="cattle-details">Age: {{ $product->age }}<br>Weight: {{ $product->weight }} kg<br>{{ $product->description }}</div>
                <div class="cattle-rating">⭐ 4.5 (100 reviews)</div>
                <button class="btn-details">Buy Now</button>
            </div>
            @endforeach
        </div>
    </section>
