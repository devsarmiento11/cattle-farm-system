<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Create Account - Cattle Farm</title>
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
        .createaccount-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 30px 40px;
            width: 320px;
            position: relative;
            font-family: Arial, sans-serif;
        }
        .createaccount-container h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }
        .input-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }
        .form-control {
            border-radius: 25px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
            height: 40px;
            border: 1px solid #ccc;
            width: 100%;
            padding-left: 40px;
            padding-right: 40px;
        }
        .input-icon {
            position: absolute;
            left: 12px;
            color: #000;
            font-size: 20px;
            pointer-events: none;
        }
        .input-icon-right {
            position: absolute;
            right: 12px;
            color: #000;
            font-size: 20px;
            pointer-events: none;
        }
        .password-wrapper {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 12px;
            cursor: pointer;
            color: #555;
            font-size: 20px;
        }
        .btn-createaccount {
            background: black;
            color: white;
            border-radius: 25px;
            width: 100%;
            padding: 10px 0;
            font-weight: 700;
            border: none;
            cursor: pointer;
        }
        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 0.9rem;
        }
        .footer-text a {
            color: blue;
            text-decoration: none;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="createaccount-container">
        <h2>Sign Up</h2>
        <form>
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-wrapper">
                    <input type="email" id="email" class="form-control" placeholder="Enter Name" />
                    <span class="input-icon-right">&#128100;</span>
                </div>
            </div>
            <div class="form-group password-wrapper">
                <label for="password" class="form-label">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" class="form-control" placeholder="Enter Password" />
                    <span class="toggle-password">&#128065;</span>
                </div>
            </div>
            <div class="form-group password-wrapper">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <div class="input-wrapper">
                    <input type="password" id="confirm_password" class="form-control" placeholder="Enter Password" />
                    <span class="toggle-password">&#128065;</span>
                </div>
            </div>
            <button type="submit" class="btn-createaccount" onclick="window.location.href='/verification'; return false;">Create Account</button>
        </form>
        <div class="footer-text">
            Already have an account? <a href="/login">Log in</a>
        </div>
    </div>
</body>
</html>
