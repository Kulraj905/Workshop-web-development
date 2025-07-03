<!DOCTYPE html>
<html>
<head>
    <title>External Book Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Arial; padding: 20px; background: #f0f0f0; }
        input, button { padding: 10px; margin: 5px; }
        .book { background: #fff; padding: 15px; margin: 10px 0; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

<h1>Search Books via Google API</h1>
<form method="get" action="/bookapi">
    <input type="text" name="q" value="<?= esc($query) ?>" placeholder="Enter book title..." required>
    <button type="submit">Search</button>
</form>

<?php if (!empty($books)): ?>
    <h2>Results for "<?= esc($query) ?>"</h2>
    <?php foreach ($books as $book): ?>
        <div class="book">
            <h3><?= esc($book['volumeInfo']['title'] ?? 'No Title') ?></h3>
            <p><strong>Author:</strong> <?= esc(implode(', ', $book['volumeInfo']['authors'] ?? ['Unknown'])) ?></p>
            <p><strong>Published:</strong> <?= esc($book['volumeInfo']['publishedDate'] ?? 'N/A') ?></p>
            <p><?= esc($book['volumeInfo']['description'] ?? 'No description available.') ?></p>
        </div>
    <?php endforeach; ?>
<?php elseif ($query): ?>
    <p>No results found for "<?= esc($query) ?>".</p>
<?php endif; ?>

</body>
</html>
