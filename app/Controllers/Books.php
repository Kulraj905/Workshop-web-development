<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Books extends BaseController
{
    public function index()
    {
        $model = new BookModel();

        $data = [
            'books_list' => $model->findAll(),
            'title'      => 'Books Library',
        ];

        return view('templates/header', $data)
            . view('books/index')
            . view('templates/footer');
    }

    public function create()
    {
        return view('templates/header', ['title' => 'Add a New Book'])
            . view('books/create')
            . view('templates/footer');
    }

    public function store()
    {
        helper(['form', 'url', 'text']);

        $model = new BookModel();
        $slug = url_title($this->request->getPost('title'), '-', true);

        // Handle Image Upload
        $imageFile = $this->request->getFile('image');
        $imageName = null;

        if ($imageFile && $imageFile->isValid() && !$imageFile->hasMoved()) {
            $imageName = $imageFile->getRandomName();
            $imageFile->move(FCPATH . 'Img', $imageName);
        }

        $model->save([
            'title'          => $this->request->getPost('title'),
            'author'         => $this->request->getPost('author'),
            'genre'          => $this->request->getPost('genre'),
            'published_year' => $this->request->getPost('published_year'),
            'description'    => $this->request->getPost('description'),
            'slug'           => $slug,
            'image'          => $imageName,
        ]);

        return redirect()->to('/books')->with('success', 'Book added successfully!');
    }

    public function view($slug = null)
    {
        $model = new BookModel();
        $book = $model->where(['slug' => $slug])->first();

        if (! $book) {
            throw new PageNotFoundException("Cannot find the book: " . $slug);
        }

        $data = [
            'book'  => $book,
            'title' => $book['title'],
        ];

        return view('templates/header', $data)
            . view('books/view')
            . view('templates/footer');
    }
}
