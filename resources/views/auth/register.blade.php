<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sign Up - Cattle Farm</title>
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
        .signup-container {
            background: white;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            padding: 35px 35px 25px 35px;
            width: 500px;
            position: relative;
            font-family: Arial, sans-serif;
            padding-left: 90px;
            padding-right: 90px;
        }
        .signup-container h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            font-size: 2.2rem;
        }
        .social-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            background: black;
            color: white;
            border-radius: 50%;
            width: 45px;
            height: 45px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.7rem;
            cursor: pointer;
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
            
        }
        .form-control {
            border-radius: 8px;
            height: 30px;
            border: 1px solid black;
            width: 100%;
            padding-left: 10px;
            padding-right: 40px;
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
        .btn-createaccount {
            background: #012F10;
            color: white;
            border-radius: 20px;
            width: 100%;
            padding: 8px 0;
            font-weight: 700;
            border: none;
            cursor: pointer;
            margin-bottom: 10px;
            margin-top: 20px;
        }
        .footer-text {
            text-align: center;
            margin-top: 0px;
            font-size: 1rem;
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
    <div class="signup-container">
        <div class="social-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="28" height="28" fill="white">
                <path d="M279.14 288l14.22-92.66h-88.91V127.91c0-25.35 12.42-50.06 52.24-50.06H293V6.26S259.5 0 225.36 0c-73.22 0-121 44.38-121 124.72v70.62H22.89V288h81.47v224h100.2V288z"/>
            </svg>
        </div>
        <h1>Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Full Name</label>
                <div class="input-wrapper">
                    <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Enter your full name" />
                    <span class="input-icon-right">&#128100;</span>
                </div>
                @error('name')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Enter Email</label>
                <div class="input-wrapper">
                    <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Enter your email" />
                    <span class="input-icon-right">&#9993;</span>
                </div>
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-wrapper">
                    <input type="tel" id="phone" class="form-control" name="phone" value="{{ old('phone') }}" autocomplete="tel" placeholder="Enter your phone number" />
                    <span class="input-icon-right">&#128222;</span>
                </div>
                @error('phone')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <div class="input-wrapper">
                    <input type="text" id="address" class="form-control" name="address" value="{{ old('address') }}" autocomplete="address" placeholder="Enter your address" />
                    <span class="input-icon-right">&#127968;</span>
                </div>
                @error('address')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Enter your password" />
                    <span class="toggle-password" onclick="togglePassword('password')">&#128065;</span>
                </div>
                @error('password')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <div class="input-wrapper">
                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter your password" />
                    <span class="toggle-password" onclick="togglePassword('password_confirmation')">&#128065;</span>
                </div>
                @error('password_confirmation')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn-createaccount">Create Account</button>
        </form>
        <div class="footer-text">
            Already have an account? <a href="{{ route('login') }}">Log in</a>
        </div>
    </div>
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            if (input.type === 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
        }
    </script>
</body>
</html>
