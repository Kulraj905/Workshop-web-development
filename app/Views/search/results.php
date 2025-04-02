<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
</head>
<body>
    <h2>Results for: <?= esc($query) ?></h2>
    <a href="<?= site_url('booksearch/search') ?>">New Search</a>

    <?php if (empty($books)): ?>
        <p>No books found.</p>
    <?php else: ?>
        <ul>
        <?php foreach ($books as $book): 
            $info = $book['volumeInfo'];
        ?>
            <li>
                <strong><?= esc($info['title'] ?? 'No Title') ?></strong><br>
                Author(s): <?= esc(implode(', ', $info['authors'] ?? ['Unknown'])) ?><br>
                <?php if (!empty($info['imageLinks']['thumbnail'])): ?>
                    <img src="<?= esc($info['imageLinks']['thumbnail']) ?>" alt="Book Cover"><br>
                <?php endif; ?>
                <p><?= esc($info['description'] ?? 'No description available.') ?></p>
            </li>
            <hr>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
