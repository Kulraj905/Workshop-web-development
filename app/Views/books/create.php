<h2>Add a New Book</h2>

<!-- Make sure to include enctype for file uploads -->
<form action="<?= base_url('books') ?>" method="post" class="book-form" enctype="multipart/form-data">
    <?= csrf_field() ?>

    <!-- Title -->
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required>

    <!-- Author -->
    <label for="author">Author</label>
    <input type="text" name="author" id="author" required>

    <!-- Genre -->
    <label for="genre">Genre</label>
    <input type="text" name="genre" id="genre">

    <!-- Published Year -->
    <label for="published_year">Published Year</label>
    <input type="number" name="published_year" id="published_year" min="0">

    <!-- Description -->
    <label for="description">Description</label>
    <textarea name="description" id="description" rows="4"></textarea>

    <!-- Image Upload -->
    <label for="image">Book Cover Image</label>
    <input type="file" name="image" id="image" accept="image/*">

    <!-- Submit -->
    <button type="submit">Save Book</button>
</form>

<!-- Styles -->
<style>
    body {
        font-family: 'Segoe UI', Tahoma, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 30px;
        color: #2d2d2d;
    }

    h2 {
        text-align: center;
        font-size: 28px;
        color: #2c3e50;
        margin-bottom: 30px;
    }

    .book-form {
        max-width: 600px;
        margin: auto;
        background-color: #fff;
        padding: 30px 40px;
        border-radius: 16px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        animation: fadeIn 0.4s ease;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .book-form label {
        font-weight: 600;
        margin-bottom: 5px;
        color: #34495e;
    }

    .book-form input[type="text"],
    .book-form input[type="number"],
    .book-form input[type="file"],
    .book-form textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 15px;
        transition: border-color 0.3s;
    }

    .book-form input:focus,
    .book-form textarea:focus {
        border-color: #3498db;
        outline: none;
    }

    .book-form button {
        margin-top: 10px;
        padding: 12px;
        background-color: #3498db;
        color: white;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .book-form button:hover {
        background-color: #2c80b4;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
