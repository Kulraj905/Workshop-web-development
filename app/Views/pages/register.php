<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Register | PustakMandir</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

=======
    <title>Register | Book Review Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
=======
            display: flex;
            flex-direction: column;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        /* Header / Navbar */
        header {
            background-color: #ffffffcc;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
<<<<<<< HEAD
            flex-wrap: wrap;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
            flex-wrap: wrap;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
            max-width: 600px;
            margin: 60px auto;
            padding: 0 20px;
=======
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        .register-box {
            background-color: #ffffffdd;
<<<<<<< HEAD
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
=======
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        h1 {
            font-family: 'Playfair Display', serif;
<<<<<<< HEAD
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
=======
            font-size: 40px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
<<<<<<< HEAD
=======
            margin-bottom: 20px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        button {
            background-color: #6c5ce7;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
<<<<<<< HEAD
            transition: background-color 0.3s ease;
=======
            transition: background 0.3s ease;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        button:hover {
            background-color: #5a4bcf;
        }

        .login-link {
            display: block;
            margin-top: 20px;
            font-size: 16px;
            color: #2c3e50;
<<<<<<< HEAD
            text-align: center;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
            margin-top: 60px;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        footer a {
            color: #8ec5fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
<<<<<<< HEAD

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 20px;
            }

            nav {
                flex-direction: column;
                width: 100%;
                gap: 10px;
                margin-top: 10px;
            }

            nav a {
                width: 100%;
                text-align: left;
            }

            .register-box {
                padding: 40px 20px;
            }

            h1 {
                font-size: 30px;
            }

            button {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 26px;
            }

            button {
                font-size: 16px;
            }
        }
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
                <?= csrf_field() ?>
=======

		<?= csrf_field() ?>
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
