<section class="categories">
    <button class="category-item" type="button" onclick="window.location.href='/native'">
        <div class="category-icon">
            <img src="{{ asset('images/bakaicon1.png') }}" alt="Native" style="width:36px; height:36px;">
        </div>
        <div>Native</div>
    </button>
    <button class="category-item" type="button" onclick="window.location.href='/imported'">
        <div class="category-icon">
            <img src="{{ asset('images/bakaicon2.png') }}" alt="Imported" style="width:36px; height:36px;">
        </div>
        <div>Imported</div>
    </button>
    <button class="category-item" type="button" onclick="window.location.href='/crossbreed'">
        <div class="category-icon">
            <img src="{{ asset('images/bakaicon3.png') }}" alt="Crossbreed" style="width:36px; height:36px;">
        </div>
        <div>Crossbreed</div>
    </button>
</section>
<section class="available-cattles">
    @foreach($products as $product)
    <div class="cattle-card">
        <img src="{{ asset('products/' . $product->image) }}" alt="{{ $product->title }}" />
        <div class="cattle-name">{{ $product->title }}</div>
        <div class="cattle-price">Price: ₱{{ number_format($product->price, 0) }}</div>
        <div class="cattle-details">Age: {{ $product->age }}<br>Weight: {{ $product->weight }} kg<br>{{ $product->description }}</div>
        <div class="cattle-rating">⭐ 4.5 (100 reviews)</div>
        <button class="btn-details" onclick="window.location.href='/checkout/{{ $product->id }}'">Buy Now</button>
    </div>
    @endforeach
</section>
<section class="about-us">
    <p>
        We provide safe and reliable livestock delivery directly to your location. All animals are transported using well-maintained, animal-friendly trailers to ensure their comfort and well-being during transit.
    </p>
</section>
