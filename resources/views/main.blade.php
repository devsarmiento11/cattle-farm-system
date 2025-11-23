<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Main - Cattle Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #fff;
            color: #000;
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
            max-width: 900px;
            margin: 0 auto 40px auto;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 20px;
            padding: 0 20px;
        }
        .cattle-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 10px;
            text-align: center;
            user-select: none;
        }
        .cattle-card img {
            width: 100%;
            border-radius: 15px;
            height: 120px;
            object-fit: cover;
        }
        .cattle-name {
            font-weight: 700;
            margin-top: 10px;
        }
        .cattle-price {
            font-size: 0.9rem;
            color: #555;
            margin: 5px 0 2px 0;
        }
        .cattle-rating {
            font-size: 0.8rem;
            color: #007b8a;
            margin-bottom: 5px;
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
        .about-us {
            max-width: 600px;
            margin: 0 auto 40px auto;
            padding: 0 20px;
            text-align: center;
            font-size: 0.9rem;
            color: #444;
            line-height: 1.4;
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
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="/main">🐄 Cattle Farm</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-dark" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/main">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
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
    <section class="available-cattles">
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Holstein" />
            <div class="cattle-name">Holstein</div>
            <div class="cattle-price">Price: ₱85,000</div>
            <div class="cattle-details">Age: 4 years (48 months)<br>Weight: 610 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.8 (120 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Beef Breeds" />
            <div class="cattle-name">Beef Breeds</div>
            <div class="cattle-price">Price: ₱72,000</div>
            <div class="cattle-details">Age: 4 years (48 months)<br>Weight: 610 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.5 (98 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Jersey" />
            <div class="cattle-name">Jersey</div>
            <div class="cattle-price">Price: ₱92,000</div>
            <div class="cattle-details">Age: 2 years 4 months (28 months)<br>Weight: 380 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.9 (152 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Charolais" />
            <div class="cattle-name">Charolais</div>
            <div class="cattle-price">Price: ₱95,000</div>
            <div class="cattle-details">Age: 5 years (60 months)<br>Weight: 810 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.3 (87 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Sahiwal" />
            <div class="cattle-name">Sahiwal</div>
            <div class="cattle-price">Price: ₱88,000</div>
            <div class="cattle-details">Age: 4 years 6 months (54 months)<br>Weight: 740 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.2 (54 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Angus" />
            <div class="cattle-name">Angus</div>
            <div class="cattle-price">₱99,000</div>
            <div class="cattle-details">Age: 3 years (36 months)<br>Weight: 550 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.4 (112 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Red Sindhi" />
            <div class="cattle-name">Red Sindhi</div>
            <div class="cattle-price">₱73,000</div>
            <div class="cattle-details">Age: 3 years 6 months (42 months)<br>Weight: 520 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.7 (77 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Native" />
            <div class="cattle-name">Native</div>
            <div class="cattle-price">₱64,000</div>
            <div class="cattle-details">Age: 2 years 8 months (32 months)<br>Weight: 450 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.6 (65 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Charolais" />
            <div class="cattle-name">Charolais</div>
            <div class="cattle-price">Price: ₱130,000</div>
            <div class="cattle-details">Age: 6 years (72 months)<br>Weight: 850 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.3 (87 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Limousin" />
            <div class="cattle-name">Limousin</div>
            <div class="cattle-price">Price: ₱125,000</div>
            <div class="cattle-details">Age: 5 years 2 months (62 months)<br>Weight: 780 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.5 (95 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Simmental" />
            <div class="cattle-name">Simmental</div>
            <div class="cattle-price">Price: ₱118,000</div>
            <div class="cattle-details">Age: 4 years 10 months (58 months)<br>Weight: 720 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.6 (102 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Hereford" />
            <div class="cattle-name">Hereford</div>
            <div class="cattle-price">Price: ₱110,000</div>
            <div class="cattle-details">Age: 4 years 3 months (51 months)<br>Weight: 650 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.4 (89 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Brahman" />
            <div class="cattle-name">Brahman</div>
            <div class="cattle-price">Price: ₱105,000</div>
            <div class="cattle-details">Age: 3 years 9 months (45 months)<br>Weight: 600 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.5 (76 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Gelbvieh" />
            <div class="cattle-name">Gelbvieh</div>
            <div class="cattle-price">Price: ₱115,000</div>
            <div class="cattle-details">Age: 5 years 5 months (65 months)<br>Weight: 750 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.3 (68 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
        <div class="cattle-card">
            <img src="/images/cow1.jpg" alt="Shorthorn" />
            <div class="cattle-name">Shorthorn</div>
            <div class="cattle-price">Price: ₱98,000</div>
            <div class="cattle-details">Age: 4 years 1 month (49 months)<br>Weight: 620 kg<br>Vaccine: Complete</div>
            <div class="cattle-rating">⭐ 4.6 (91 reviews)</div>
            <button class="btn-details">Buy Now</button>
        </div>
    </section>
    <section class="about-us">
        <p>
            We provide safe and reliable livestock delivery directly to your location. All animals are transported using well-maintained, animal-friendly trailers to ensure their comfort and well-being during transit.
        </p>
    </section>
    <footer>
        <div class="payment-methods">
            <strong>Payment Methods:</strong>
            <img src="/images/gcashicon.png" alt="GCash" />
            <img src="/images/visaicon.png" alt="Visa" />
            <img src="/images/mastericon.png" alt="Mastercard" />
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
