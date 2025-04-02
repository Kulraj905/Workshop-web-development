<?php

namespace App\Controllers;

use App\Models\BookModel;

class Ajax extends BaseController
{
    public function get($slug = null)
    {
        $model = new BookModel(); 
        $data = $model->where('slug', $slug)->first();

        if (!$data) {
            return $this->response->setJSON(['error' => 'Book not found'])->setStatusCode(404);
        }

        return $this->response->setJSON($data);
    }
}
