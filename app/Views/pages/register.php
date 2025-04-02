<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | Book Review Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #8ec5fc, #e0c3fc);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header / Navbar */
        header {
            background-color: #ffffffcc;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #2c3e50;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #6c5ce7;
            color: #fff;
        }

        /* Register Section */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        .register-box {
            background-color: #ffffffdd;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 20px;
        }

        button {
            background-color: #6c5ce7;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #5a4bcf;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            font-size: 16px;
            color: #2c3e50;
        }

        .login-link:hover {
            text-decoration: underline;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: #ffffffcc;
            text-align: center;
            padding: 20px 10px;
            font-size: 14px;
        }

        footer a {
            color: #8ec5fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">PustakMandir</div>
        <nav>
            <a href="<?= base_url('/books'); ?>">Books</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Contact</a>
            <a href="<?= base_url('/login'); ?>">Login</a>
        </nav>
    </header>

    <!-- Register Section -->
    <div class="container">
        <div class="register-box">
            <h1>Register</h1>
            <form action="<?= base_url('/register/submit'); ?>" method="POST">

		<?= csrf_field() ?>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button type="submit">Register</button>
            </form>
            <a href="<?= base_url('/login'); ?>" class="login-link">Already have an account? Login here.</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <?= date('Y'); ?> PustakMandir. Made by Kul Raj Bista. | <a href="#">Privacy Policy</a>
    </footer>

</body>
</html>
