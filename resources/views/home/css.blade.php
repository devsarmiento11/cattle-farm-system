<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cattle Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
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
            overflow-x: auto;
            white-space: nowrap;
            padding-bottom: 20px;
            margin: 20px 0 40px 0;
        }
        .cattle-card {
            display: inline-block;
            background: white;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgb(0 0 0 / 0.1);
            width: 180px;
            margin-right: 15px;
            vertical-align: top;
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