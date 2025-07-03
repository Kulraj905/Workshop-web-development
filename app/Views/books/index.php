<?php $imgBase = 'https://mi-linux.wlv.ac.uk/~2307946/ci4-project/public/img/'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Books | PustakMandir</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --accent-color: #00b894;
            --bg-light: #f9f9f9;
            --text-color: #2d3436;
            --card-bg: #ffffff;
            --border-color: #dfe6e9;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--bg-light);
            color: var(--text-color);
        }

        header {
            background-color: #fff;
            padding: 20px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            color: var(--primary-color);
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
        }

        nav a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            padding: 8px 16px;
            border-radius: 8px;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: var(--primary-color);
            color: #fff;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-form input {
            padding: 8px 12px;
            border: 1px solid #ccc;
            border-radius: 8px 0 0 8px;
            outline: none;
        }

        .search-form button {
            padding: 8px 12px;
            background-color: var(--primary-color);
            color: #fff;
            border: none;
            border-radius: 0 8px 8px 0;
            cursor: pointer;
        }

        main {
            padding: 30px 50px;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 20px;
            border-left: 4px solid var(--primary-color);
            padding-left: 10px;
        }

        #ajaxBook {
            background-color: #e0f7fa;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 5px solid #00acc1;
            border-radius: 6px;
            font-size: 16px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
        }

        .book-container {
            background-color: var(--card-bg);
            padding: 20px;
            border: 1px solid var(--border-color);
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.03);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .book-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.08);
        }

        .book-cover {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .book-container h3 {
            margin-bottom: 10px;
            color: var(--primary-color);
        }

        .book-container p {
            margin: 6px 0;
            font-size: 15px;
        }

        a, button {
            display: inline-block;
            margin-top: 10px;
            margin-right: 10px;
            background-color: var(--accent-color);
            color: white;
            padding: 8px 14px;
            border: none;
            border-radius: 8px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        a:hover, button:hover {
            background-color: #019875;
        }

        .btn {
            margin-top: 25px;
        }

        @media (max-width: 768px) {
            main {
                padding: 20px;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-form input {
                width: 60%;
            }

            .search-form button {
                width: 40%;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">PustakMandir</div>
    <div class="nav-search-wrapper">
        <nav>
            <a href="<?= base_url('/books'); ?>">Books</a>
            <a href="<?= base_url('/about'); ?>">About</a>
            <a href="<?= base_url('/contact'); ?>">Contact</a>
            <a href="<?= base_url('/login'); ?>">Login</a>
        </nav>
        <form class="search-form" action="<?= base_url('/google/search') ?>" method="get">
            <input type="text" name="q" placeholder="Search books..." required>
            <button type="submit">Search</button>
        </form>
    </div>
</header>

<main>
    <h2><?= esc($title) ?></h2>

    <div id="ajaxBook"></div>

    <?php if (! empty($books_list) && is_array($books_list)): ?>
        <div class="grid">
            <?php foreach ($books_list as $book): ?>
                <div class="book-container">
                    <?php if (!empty($book['image'])): ?>
                        <img src="<?= $imgBase . esc($book['image']) ?>" alt="Cover of <?= esc($book['title']) ?>" class="book-cover">
                    <?php endif; ?>
                    <h3><?= esc($book['title']) ?></h3>
                    <p><strong>Author:</strong> <?= esc($book['author']) ?></p>
                    <p><strong>Genre:</strong> <?= esc($book['genre']) ?></p>
                    <p><strong>Year:</strong> <?= esc($book['published_year']) ?></p>
                    <p><strong>Description:</strong> <?= esc($book['description']) ?></p>
                    <a href="<?= site_url('books/' . esc($book['slug'])) ?>">View Book</a>
                    <button onclick="getBookData('<?= esc($book['slug'], 'url') ?>')">View via AJAX</button>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <h3>No Books Found</h3>
        <p>Sorry, we couldn't find any books in the library.</p>
    <?php endif; ?>

    <a href="<?= site_url('books/create'); ?>" class="btn">Add a New Book</a>
</main>

<script>
    function getBookData(slug) {
        const output = document.getElementById("ajaxBook");
        output.innerHTML = "<em>Loading book data...</em>";

        const imgBase = "<?= $imgBase ?>";

        fetch('<?= base_url('ajax/get/') ?>' + slug)
            .then(response => {
                if (!response.ok) {
                    throw new Error("Book not found or server error.");
                }
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    output.innerHTML = "<strong>Error:</strong> " + data.error;
                } else {
                    const image = data.image ? `<img src="${imgBase}${data.image}" class="book-cover" alt="Cover of ${data.title}">` : '';
                    output.innerHTML = `
                        <div class="book-container">
                            ${image}
                            <h3>${data.title}</h3>
                            <p><strong>Author:</strong> ${data.author}</p>
                            <p><strong>Genre:</strong> ${data.genre}</p>
                            <p><strong>Published Year:</strong> ${data.published_year}</p>
                            <p><strong>Description:</strong> ${data.description}</p>
                        </div>
                    `;
                }
            })
            .catch(error => {
                console.error("Error fetching book:", error);
                output.innerHTML = "<strong>Error:</strong> Could not load book data.";
            });
    }
</script>

</body>
</html>
