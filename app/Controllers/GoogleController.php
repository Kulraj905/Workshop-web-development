<?php

namespace App\Controllers;

class GoogleController extends BaseController
{
    private $apiKey = 'AIzaSyBm6CrkTdsWZ_8jt73bXMX_mSS3idfSFOk'; // Replace with your actual Google Books API key

    public function search()
    {
        $query = $this->request->getGet('q');

        if (!$query) {
            return view('key/search');
        }

        $url = "https://www.googleapis.com/books/v1/volumes?q=" . urlencode($query) . "&key=" . $this->apiKey;
        $response = file_get_contents($url);
        $books = json_decode($response, true);

        return view('key/search', [
            'books' => $books['items'] ?? [],
            'query' => $query
        ]);
    }
}
