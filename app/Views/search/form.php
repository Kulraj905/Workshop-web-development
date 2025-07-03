<!DOCTYPE html>
<html>
<head>
    <title>Book Search</title>
</head>
<body>
    <h2>Search Google Books</h2>

    <form method="get" action="<?= site_url('booksearch/search') ?>">
        <input type="text" name="q" placeholder="Enter a book title or author" required>
        <button type="submit">Search</button>
    </form>
</body>
</html>
