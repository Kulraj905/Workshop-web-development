<?php

namespace App\Controllers;

use App\Models\BookModel;

class Ajax extends BaseController
{
    public function get($slug = null)
    {
        $model = new BookModel();
        $book = $model->where('slug', $slug)->first();

        if ($book) {
            return $this->response->setJSON($book);
        } else {
            return $this->response->setJSON(['error' => 'Book not found']);
        }
    }
}
