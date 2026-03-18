<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Login | LMS</title>
    
    <!-- Importing Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* A high-quality library background image */
            background: url('https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=2070&auto=format&fit=crop') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Deep, rich overlay to make the background subtle and the card pop */
        .overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(135deg, rgba(10, 31, 68, 0.9) 0%, rgba(0, 0, 0, 0.8) 100%);
            z-index: 1;
        }

        /* Glassmorphism Card Effect */
        .login-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 420px;
            padding: 50px 40px;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 24px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo-area {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-area h2 {
            font-family: 'Playfair Display', serif;
            color: #fff;
            font-size: 32px;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .logo-area p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
            font-weight: 300;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            color: #fff;
            font-size: 15px;
            outline: none;
            transition: all 0.3s ease;
        }

        /* Glowing effect on focus */
        .input-group input:focus {
            border-color: #d4af37; /* Premium Gold Accent */
            background: rgba(255, 255, 255, 0.08);
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.2);
        }

        .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            font-size: 13px;
        }

        .options label {
            color: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .options label input {
            margin-right: 8px;
            accent-color: #d4af37;
        }

        .options a {
            color: #d4af37;
            text-decoration: none;
            transition: 0.3s;
        }

        .options a:hover {
            color: #fff;
        }

        /* Premium Button */
        button {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #d4af37 0%, #aa8715 100%);
            color: #111;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(212, 175, 55, 0.3);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 25px rgba(212, 175, 55, 0.4);
        }

        .signup-link {
            text-align: center;
            margin-top: 30px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }

        .signup-link a {
            color: #fff;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
        }

        .signup-link a:hover {
            color: #d4af37;
        }
    </style>
</head>
<body>

<!-- Dark Navy Overlay -->
<div class="overlay"></div>

<!-- Glassmorphism Card -->
<div class="login-container">
    <div class="logo-area">
        <h2>Welcome Back</h2>
        <p>Sign in to access your digital library</p>
    </div>
    
    <form method="post" action="login.php">
        <div class="input-group">
            <input type="email" name="email" placeholder="Email Address" required>
        </div>
        
        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <div class="options">
            <label>
                <input type="checkbox" name="remember"> Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>
        
        <button type="submit">Sign In</button>
    </form>
    
    <div class="signup-link">
        Don't have an account? <a href="#">Create one</a>
    </div>
</div>

</body>
</html>