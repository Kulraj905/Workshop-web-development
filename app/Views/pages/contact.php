<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title>Contact | PustakMandir</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

=======
    <title>Contact | Book Review Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            display: block;
        }

=======
            display: flex;
            flex-direction: column;
        }

        /* Header / Navbar */
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        header {
            background-color: #ffffffcc;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #2c3e50;
<<<<<<< HEAD
=======
            margin-bottom: 10px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        .nav-search-wrapper {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        nav {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
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

<<<<<<< HEAD
=======
        /* Search Bar */
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input[type="text"] {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 8px 0 0 8px;
            outline: none;
            font-size: 14px;
        }

        .search-form button {
            padding: 8px 12px;
            background-color: #6c5ce7;
            color: #fff;
            border: none;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
            font-size: 14px;
<<<<<<< HEAD
=======
            transition: background-color 0.3s;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        .search-form button:hover {
            background-color: #5a4bcf;
        }

<<<<<<< HEAD
        .container {
            max-width: 1000px;
            margin: 60px auto;
            padding: 0 20px;
=======
        /* Contact Section */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        .contact-box {
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
            margin-bottom: 10px;
            text-align: center;
        }

        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 30px;
            text-align: center;
=======
            font-size: 40px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        p {
            font-size: 20px;
            color: #555;
            margin-bottom: 30px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

<<<<<<< HEAD
        input[type="text"],
        input[type="email"],
        textarea {
=======
        input[type="text"], input[type="email"], textarea {
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            padding: 12px;
            border: 2px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            width: 100%;
        }

<<<<<<< HEAD
        textarea {
            resize: vertical;
        }

=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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

<<<<<<< HEAD
=======
        /* Footer */
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
=======
        /* Responsive Styles */
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 20px;
            }

            .nav-search-wrapper {
                flex-direction: column;
                align-items: flex-start;
                width: 100%;
            }

            nav {
                flex-direction: column;
                width: 100%;
                gap: 10px;
                margin-top: 10px;
            }

<<<<<<< HEAD
=======
            nav a {
                display: block;
                width: 100%;
                padding: 10px;
                text-align: left;
            }

>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            .search-form {
                width: 100%;
                margin-top: 10px;
            }

            .search-form input[type="text"] {
                width: 70%;
<<<<<<< HEAD
=======
                border-radius: 8px 0 0 8px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            }

            .search-form button {
                width: 30%;
<<<<<<< HEAD
=======
                border-radius: 0 8px 8px 0;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            }

            .contact-box {
                padding: 40px 20px;
            }

            h1 {
<<<<<<< HEAD
                font-size: 28px;
=======
                font-size: 32px;
            }

            p {
                font-size: 18px;
            }

            button {
                width: 100%;
                padding: 14px;
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 26px;
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            }

            p {
                font-size: 16px;
            }

            button {
<<<<<<< HEAD
                width: 100%;
=======
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">PustakMandir</div>
        <div class="nav-search-wrapper">
            <nav>
                <a href="<?= base_url('/books'); ?>">Books</a>
                <a href="<?= base_url('/about'); ?>">About</a>
                <a href="<?= base_url('/contact'); ?>">Contact</a>
                <a href="<?= base_url('/login'); ?>">Login</a>
            </nav>
            <form class="search-form" action="<?= base_url('/search'); ?>" method="get">
                <input type="text" name="q" placeholder="Search books..." required>
                <button type="submit">Search</button>
            </form>
        </div>
    </header>

    <!-- Contact Section -->
    <div class="container">
        <div class="contact-box">
            <h1>Contact Us</h1>
            <p>If you have any questions or would like to get in touch with us, feel free to send a message below.</p>
            <form action="<?= base_url('contact/submit') ?>" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <?= date('Y'); ?> PustakMandir. Made by Kul Raj Bista. | <a href="#">Privacy Policy</a>
    </footer>

</body>
</html>
