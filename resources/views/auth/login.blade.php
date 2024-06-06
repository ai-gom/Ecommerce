<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('images/loginbg.gif'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background-color: rgba(255, 255, 255, 0.4); /* Adjust the opacity as needed */
            backdrop-filter: blur(10px); /* Adjust the blur strength as needed */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 500px;
            max-width: 100%;
            text-align: center;
        }
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        .form-container input[type="email"]:focus,
        .form-container input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
        }
        .form-container input[type="checkbox"] {
            margin-right: 5px;
        }
        .form-container button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .form-container button:hover {
            background-color: #0056b3;
        }
        .form-container .forgot-password {
            color: #777;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }
        .form-container .forgot-password:hover {
            color: #555;
        }

        .signup-link {
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            display: inline-block;
        }
        .signup-link:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email Address -->
            <div>
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
            </div>
            <!-- Password -->
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>
            <!-- Remember Me -->
            <div>
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember">
                    <span>Remember me</span>
                </label>
            </div>
            <button type="submit">Log in</button>
        </form>
        @if (Route::has('password.request'))
            <a class="forgot-password" href="{{ route('password.request') }}">Forgot your password?</a>
        @endif
        <a class="signup-link" href="{{ route('register') }}">Don't have an account? Sign up</a>
    </div>
</body>
</html>
