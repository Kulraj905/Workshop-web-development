<?php

namespace App\Controllers;

use App\Models\BookModel;

class Ajax extends BaseController
{
    public function get($slug = null)
    {
<<<<<<< HEAD
        $model = new BookModel();
        $book = $model->where('slug', $slug)->first();

        if ($book) {
            return $this->response->setJSON($book);
        } else {
            return $this->response->setJSON(['error' => 'Book not found']);
        }
=======
        $model = new BookModel(); 
        $data = $model->where('slug', $slug)->first();

        if (!$data) {
            return $this->response->setJSON(['error' => 'Book not found'])->setStatusCode(404);
        }

        return $this->response->setJSON($data);
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    }
}
