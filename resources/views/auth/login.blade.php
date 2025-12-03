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
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 20px 35px;
            width: 500px;
            position: relative;
            font-family: Arial, sans-serif;
            height: 500px;
            padding-right: 80px;
            padding-left: 80px;

           
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2.2rem;
        }
        .form-group {
            margin-bottom: 18px;
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
            margin-bottom: 30px;
            
        
        }
        .form-control {
            border-radius: 8px;
            height: 30px;
            border: 1px solid black;
            width: 100%;
            padding-left: 10px;
            padding-right: 40px;
            text-align: left;
        }
        .input-icon {
            position: absolute;
            left: 12px;
            color: #333;
            font-size: 18px;
            pointer-events: none;
        }
        .input-icon-right {
            position: absolute;
            right: 12px;
            color: #333;
            font-size: 18px;
            pointer-events: none;
        }
        .toggle-password {
            position: absolute;
            right: 12px;
            cursor: pointer;
            color: #333;
            font-size: 18px;
        }
        .remember-forgot {
            justify-content: space-between;
            align-items: center;
        }
        .remember-me {

            align-items: center;
            .remember-me input[type="checkbox"] {
                width: 22px;
                height: 22px;
                accent-color: #114d2d;
                margin-right: 8px;
            }
        }
        
        .forgot-password {
            display: block;
            text-align: center;
            font-size: 1rem;
            color: #114d2d;
            text-decoration: none;
            margin-bottom: 10px;
            margin-top: 30px;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
 
       
        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn-login {
            background: #012F10;
            color: white;
            border-radius: 20px;
            width: 100%;
            padding: 8px 0;
            font-weight: 700;
            border: none;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 20px;
        }
        .btn-signup {
            background: white;
            color: #114d2d;
            border: 1.5px solid #114d2d;
            border-radius: 20px;
            width: 100%;
            display: block;
            margin: 0 auto;
            padding: 8px 0;
            font-weight: 700;
            cursor: pointer;
            font-size: 1rem;
            margin-bottom: 200px;
            text-align: center;
            text-decoration: none;
        }
            
            
    
        .footer-text {
            text-align: center;
            margin-top: 10px;
            font-size: 0.95rem;
        }
        .footer-text a {
            color: #114d2d;
            text-decoration: none;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
        .social-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background: black;
            color: white;
            border-radius: 50%;
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.7rem;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    <div class="login-container">
    <div class="social-icon">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="35" height="35" fill="white">
        <path d="M279.14 288l14.22-92.66h-88.91V127.91c0-25.35 12.42-50.06 52.24-50.06H293V6.26S259.5 0 225.36 0c-73.22 0-121 44.38-121 124.72v70.62H22.89V288h81.47v224h100.2V288z"/>
    </svg>
</div>
        <h1>Log In</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <div class="input-wrapper">
                    <input type="email" id="email" class="form-control" placeholder="Enter your email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    <span class="input-icon-right">&#9993;</span>
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" class="form-control" placeholder="Enter your password" name="password" required autocomplete="current-password" />
                    <span class="toggle-password" onclick="togglePassword()">&#128065;</span>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }} />
                <label for="remember">Remember me</label>
            </div>
            <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
            <button type="submit" class="btn-login">Log in</button>
            <a href="{{ route('register') }}" class="btn-signup">Sign up</a>
        </form>
    </div>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.innerHTML = '&#128064;'; // Eye slash
            } else {
                passwordInput.type = 'password';
                toggleIcon.innerHTML = '&#128065;'; // Eye
            }
        }
    </script>
</body>
</html>
