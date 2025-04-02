<!-- ?? Book Detail Card -->
<div class="book-detail-container">
    <h2><?= esc($book['title']) ?></h2> 

    <div class="book-meta">
        <p><strong>Author:</strong> <?= esc($book['author']) ?></p>
        <p><strong>Genre:</strong> <?= esc($book['genre']) ?></p>
        <p><strong>Published Year:</strong> <?= esc($book['published_year']) ?></p>
    </div>

    <div class="book-description">
        <p><strong>Description:</strong></p>
        <p><?= esc($book['description']) ?></p>
    </div>

    <p><a href="<?= base_url('books') ?>" class="back-link"> Back to Book List</a></p>
</div>


<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 30px;
        color: #2d2d2d;
    }

    .book-detail-container {
        max-width: 700px;
        margin: auto;
        background-color: #ffffff;
        padding: 30px 40px;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        animation: fadeIn 0.4s ease;
    }

    h2 {
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 20px;
        border-bottom: 1px solid #ddd;
        padding-bottom: 10px;
    }

    .book-meta p, .book-description p {
        font-size: 16px;
        margin: 8px 0;
    }

    strong {
        color: #555;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 16px;
        background-color: #3498db;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        font-weight: 500;
        transition: background-color 0.3s ease;
    }

    .back-link:hover {
        background-color: #2c80b4;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
