<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome | Book Review Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            flex-wrap: wrap;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 10px;
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

        /* Search Bar */
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
            transition: background-color 0.3s;
        }

        .search-form button:hover {
            background-color: #5a4bcf;
        }

        /* Hero Section */
        .container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        .welcome-box {
            background-color: #ffffffdd;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            max-width: 600px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: 40px;
            color: #2c3e50;
            margin-bottom: 15px;
        }

        p {
            font-size: 20px;
            color: #555;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #6c5ce7;
            color: white;
            padding: 12px 25px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #5a4bcf;
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

        /* Responsive Styles */
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

            nav a {
                display: block;
                width: 100%;
                padding: 10px;
                text-align: left;
            }

            .search-form {
                width: 100%;
                margin-top: 10px;
            }

            .search-form input[type="text"] {
                width: 70%;
                border-radius: 8px 0 0 8px;
            }

            .search-form button {
                width: 30%;
                border-radius: 0 8px 8px 0;
            }

            .welcome-box {
                padding: 40px 20px;
            }

            h1 {
                font-size: 32px;
            }

            p {
                font-size: 18px;
            }

            .btn {
                width: 100%;
                padding: 14px;
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 26px;
            }

            p {
                font-size: 16px;
            }

            .btn {
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
            <form class="search-form" action="https://mi-linux.wlv.ac.uk/~2307946/ci4-project/public/google/search" method="get">
    <input type="text" name="q" placeholder="Search books..." required>
    <button type="submit">Search</button>
</form>
        </div>
    </header>

    <!-- Hero Section -->
    <div class="container">
        <div class="welcome-box">
            <h1>Welcome to PustakMandir</h1>
            <p>Discover, review, and share your favourite books with the world.</p>
            <a href="<?= base_url('/books'); ?>" class="btn">Start Exploring</a>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        &copy; <?= date('Y'); ?> PustakMandir. Made by Kul Raj Bista. | <a href="#">Privacy Policy</a>
    </footer>

</body>
</html>
