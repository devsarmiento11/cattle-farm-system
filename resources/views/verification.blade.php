<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>OTP Verification - Cattle Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .verification-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 30px 40px;
            width: 320px;
            position: relative;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .verification-container h2 {
            color: #1a73e8;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #a3bffa;
            color: #1a1a1a;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        .form-control {
            border-radius: 15px;
            border: 1px solid #ccc;
            height: 40px;
            width: 100%;
            padding: 0 15px;
            font-size: 1rem;
            margin-bottom: 20px;
        }
        .btn-submit {
            background: black;
            color: white;
            border-radius: 25px;
            width: 100%;
            padding: 10px 0;
            font-weight: 700;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="verification-container">
        <h2>OTP VERIFICATION</h2>
        <div class="info-box">
            We have sent you a code to your email - example@gmail.com
        </div>
        <form action="/main" method="get">
            <input type="text" class="form-control" placeholder="Enter verification code" />
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
