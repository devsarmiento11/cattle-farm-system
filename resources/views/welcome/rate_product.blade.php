<!DOCTYPE html>
<html lang="en">

<head>
    @include('welcome.css')
    <title>Rate Product - Order #{{ $order->id }}</title>
    <style>
        .rate-section {
            max-width: 600px;
            margin: 40px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .rate-section h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            color: #333;
            display: block;
            margin-bottom: 8px;
        }

        .star-rating {
            display: flex;
            flex-direction: row;
            justify-content: center;
            font-size: 30px;
            unicode-bidi: bidi-override;
        }

        .star-rating input[type="radio"] {
            display: none;
        }

        .star-rating label {
            color: #ccc;
            cursor: pointer;
        }

        .star-rating input[type="radio"]:checked + label,
        .star-rating input[type="radio"]:checked ~ label {
            color: #ffca08;
        }

        .star-rating label:hover,
        .star-rating label:hover ~ label {
            color: #ffca08;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        .btn-submit {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    @include('welcome.header')

    <section class="rate-section">
        <h2>Rate Your Product - Order #{{ $order->id }}</h2>

        @if(session('error'))
            <div style="color: red; text-align: center; margin-bottom: 20px;">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('rate.submit', ['order_id' => $order->id]) }}" method="POST">
            @csrf

            <div class="form-group star-rating">
                <input type="radio" id="star5" name="rating" value="5" required>
                <label for="star5" title="5 stars">&#9733;</label>
                <input type="radio" id="star4" name="rating" value="4">
                <label for="star4" title="4 stars">&#9733;</label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3" title="3 stars">&#9733;</label>
                <input type="radio" id="star2" name="rating" value="2">
                <label for="star2" title="2 stars">&#9733;</label>
                <input type="radio" id="star1" name="rating" value="1">
                <label for="star1" title="1 star">&#9733;</label>
            </div>

            <div class="form-group">
                <label for="review_text">Your Review (optional)</label>
                <textarea id="review_text" name="review_text" placeholder="Write your review here..."></textarea>
            </div>

            <button type="submit" class="btn-submit">Submit Review</button>
        </form>
    </section>

    @include('welcome.footer')
</body>

</html>
