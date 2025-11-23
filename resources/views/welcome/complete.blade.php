<!DOCTYPE html>
<html lang="en">
<head>
    @include('welcome.css')
    <title>Order Complete</title>
    <style>
        .complete-section {
            max-width: 800px;
            margin: 50px auto;
            padding: 40px;
            text-align: center;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .complete-section h2 {
            color: #28a745;
            margin-bottom: 20px;
        }

        .complete-section p {
            color: #555;
            margin-bottom: 30px;
            font-size: 18px;
        }

        .btn-home {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }

        .checkmark {
            font-size: 60px;
            color: #28a745;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    @include('welcome.header')

    <section class="complete-section">
        <div class="checkmark">✓</div>
        <h2>Order Complete!</h2>
        <p>Thank you for your purchase. Your order has been successfully placed and will be processed shortly.</p>
        <p>You will receive a confirmation email with your order details.</p>
        <a href="/" class="btn-home">Return to Home</a>
    </section>

    @include('welcome.footer')
</body>
</html>
