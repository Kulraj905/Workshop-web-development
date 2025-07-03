<!DOCTYPE html>
<html>
<head>
    <title>Google Books Search</title>
</head>
<body>
    <h2>Search Google Books</h2>
    <input type="text" id="searchQuery" placeholder="Enter a book title">
    <button onclick="searchBooks()">Search</button>

    <div id="results"></div>

    <script>
        function searchBooks() {
            const query = document.getElementById('searchQuery').value;

            fetch('/booksearch/search?q=' + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    const resultsDiv = document.getElementById('results');
                    resultsDiv.innerHTML = '';

                    if (!data.items || data.items.length === 0) {
                        resultsDiv.innerHTML = '<p>No books found.</p>';
                        return;
                    }

                    data.items.forEach(item => {
                        const title = item.volumeInfo.title || 'No title';
                        const authors = item.volumeInfo.authors ? item.volumeInfo.authors.join(', ') : 'Unknown';
                        const thumbnail = item.volumeInfo.imageLinks?.thumbnail || '';

                        const card = `
                            <div style="border:1px solid #ccc; margin:10px; padding:10px;">
                                <img src="${thumbnail}" alt="Cover" style="width:100px;"><br>
                                <strong>${title}</strong><br>
                                <em>By ${authors}</em>
                            </div>
                        `;
                        resultsDiv.innerHTML += card;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('results').innerHTML = '<p>Something went wrong.</p>';
                });
        }
    </script>
</body>
</html>
