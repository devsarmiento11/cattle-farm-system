<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cattle Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Custom styles for the page */
        .hero-section {
            position: relative;
            background: url('{{ asset("images/cowbg1.jpg") }}') no-repeat center center/cover;
            height: 400px;
            color: white;
            display: flex;
            align-items: center;
            padding-left: 50px;
        }
        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            max-width: 450px;
            border-radius: 5px;
        }
        .categories {
            background: #fff;
            border-radius: 20px;
            padding: 20px 30px;
            display: flex;
            justify-content: center;
            gap: 40px;
            margin: 40px auto;
            max-width: 600px;
            box-shadow: 0 0 10px rgb(0 0 0 / 0.1);
        }
        .category-item {
            text-align: center;
            cursor: pointer;
        }
        .category-icon {
            width: 70px;
            height: 70px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-size: 36px;
            color: #333;
            box-shadow: 0 2px 5px rgb(0 0 0 / 0.1);
        }
        .available-cattles {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding-bottom: 20px;
            margin: 20px 0 40px 0;
        }
        .cattle-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            width: 180px;
            flex-shrink: 0;
            padding: 10px;
            text-align: center;
        }
        .cattle-card img {
            width: 100%;
            border-radius: 12px;
            height: 120px;
            object-fit: cover;
        }
        .cattle-name {
            font-weight: 600;
            margin-top: 10px;
        }
        .cattle-price {
            font-size: 0.9rem;
            color: #555;
            margin: 5px 0;
        }
        .btn-details {
            background: #007b8a;
            color: white;
            border: none;
            border-radius: 15px;
            padding: 5px 10px;
            font-size: 0.8rem;
            cursor: pointer;
        }
        .btn-details:hover {
            background: #005f66;
        }
        .cattle-details {
            font-size: 0.8rem;
            color: #666;
            margin-bottom: 5px;
            line-height: 1.2;
        }
        .cattle-rating {
            font-size: 0.8rem;
            color: #007b8a;
            margin-bottom: 5px;
        }
        .delivery-methods {
            display: flex;
            justify-content: center;
            gap: 40px;
            margin-bottom: 50px;
        }
        .delivery-option {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            width: 140px;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            user-select: none;
        }
        .delivery-icon {
            font-size: 36px;
            margin-bottom: 10px;
            color: #333;
        }
        .about-us {
            text-align: center;
            font-size: 0.9rem;
            color: #444;
            max-width: 600px;
            margin: 0 auto 40px auto;
            padding: 0 20px;
        }
        /* Scrollbar styling for horizontal scroll */
        .available-cattles::-webkit-scrollbar {
            height: 8px;
        }
        .available-cattles::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 4px;
        }
        .available-cattles::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
         footer {
            background: #eee;
            padding: 15px 20px;
            text-align: center;
            font-size: 0.8rem;
            color: #666;
            user-select: none;
        }
        .payment-methods, .contact-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 10px;
        }
        .payment-methods img, .contact-icons img {
            height: 25px;
            cursor: pointer;
        }
        .nav-item {
            margin-right: 15px;
        }
        .nav-link {
            transition: background-color 0.3s ease, color 0.3s ease, padding 0.3s ease;
        }
        .nav-link:hover {
            color: white !important;
            background-color: darkgreen !important;
            padding: 5px 12px;
            border-radius: 20px;
            transition: background-color 0.3s ease, color 0.3s ease, padding 0.3s ease;
        }
    </style>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="/home">🐄 Cattle Farm</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-dark" href="/login"><i class="bi bi-person"></i> Login</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay">
            <h1 class="display-5 fw-bold">SHOP NOW!</h1>
            <p>
                "Raising quality, one hoof at a time — our online cattle farm brings tradition, care, and modern convenience together to deliver healthy, well-bred livestock right to your fingertips."
            </p>
            <a href="#" class="btn btn-outline-light btn-sm">Sign Up</a>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="category-item">
            <div class="category-icon">
                <img src="{{ asset('images/bakaicon1.png') }}" alt="Native" style="width:36px; height:36px;">
            </div>
            <div>Native</div>
        </div>
        <div class="category-item">
            <div class="category-icon">
                <img src="{{ asset('images/bakaicon2.png') }}" alt="Imported" style="width:36px; height:36px;">
            </div>
            <div>Imported</div>
        </div>
        <div class="category-item">
            <div class="category-icon">
                <img src="{{ asset('images/bakaicon3.png') }}" alt="Crossbreed" style="width:36px; height:36px;">
            </div>
            <div>Crossbreed</div>
        </div>
    </section>

    <!-- Available Cattles Section -->
    @include('home.product')

    <!-- Delivery Method Section -->
    <section class="delivery-methods">
        <div class="delivery-option">
            <div class="delivery-icon">
                <img src="{{ asset('images/truck1.png') }}" alt="Delivery" style="width:36px; height:36px;">
            </div>
            <div><strong>Delivery</strong></div>
        </div>
        <div class="delivery-option">
            <div class="delivery-icon">
                <img src="{{ asset('images/pickup1.png') }}" alt="Pick-up" style="width:36px; height:36px;">
            </div>
            <div><strong>Pick-up</strong></div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <strong>About Us</strong>
        <p>
            We provide safe and reliable livestock delivery directly to your location. All animals are transported using well-maintained, animal-friendly trailers to ensure their comfort and well-being during transit.
        </p>
    </section>

   <footer>
        <div class="payment-methods">
            <strong>Payment Methods:</strong>
            <img src="/images/gcashicon.png" alt="GCash" />
            
            <img src="/images/codicon.png" alt="Cash on Delivery" />
        </div>
        <div class="contact-icons">
             <strong>Contact Us:</strong>
            <img src="/images/fbicon.png" alt="Facebook" />
            <img src="/images/gmailicon.png" alt="Gmail" />
            <img src="/images/phoneicon.png" alt="Phone" />
        </div>
        <div>&copy; 2024 Cattle Farm System. All rights reserved.</div>
    </footer>
</body>
</html>
