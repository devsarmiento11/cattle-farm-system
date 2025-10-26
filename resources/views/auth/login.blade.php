<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Cattle Farm</title>
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
        .login-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 30px 40px;
            width: 320px;
            position: relative;
            font-family: Arial, sans-serif;
        }
        .login-container h2 {
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
            color: #5a2a82;
            font-size: 20px;
            pointer-events: none;
        }
        .input-icon-right {
            position: absolute;
            right: 12px;
            color: #5a2a82;
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
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            font-size: 0.9rem;
        }
        .btn-login {
            background: darkgreen;
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
        .social-icon {
            position: absolute;
            top: 15px;
            right: 15px;
            background: black;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            cursor: pointer;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="social-icon">f</div>
        <h2>Log in</h2>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <div class="input-wrapper">
                    <input type="email" id="email" class="form-control" placeholder="Enter Email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    <span class="input-icon-right">&#128100;</span>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group password-wrapper">
                <label for="password" class="form-label">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" class="form-control" placeholder="Enter Password" name="password" required autocomplete="current-password" />
                    <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="remember-forgot">
                <div>
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
                    <label for="remember">Remember me</label>
                </div>
                <div><a href="{{ route('password.request') }}">Forgot Password?</a></div>
            </div>
            <button type="submit" class="btn-login">LOGIN</button>
        </form>
        <div class="footer-text">
            Not registered? <a href="{{ route('register') }}">Create an account</a>
        </div>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'password';
                toggleIcon.innerHTML = '&#128064;'; // Eye slash
            } else {
                passwordInput.type = 'password';
                toggleIcon.innerHTML = '&#128065;'; // Eye
            }
        }
    </script>
</body>
</html>
