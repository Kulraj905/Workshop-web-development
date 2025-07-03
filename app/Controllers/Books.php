<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Books extends BaseController
{
    public function index()
    {
<<<<<<< HEAD
        $model = new BookModel();
=======
        $model = new BookModel(); // ? Use "new" instead of "model()" helper
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7

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
<<<<<<< HEAD
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

=======
        helper('text'); // For slug

        $model = new BookModel(); // ? again, use "new BookModel()"

        $slug = url_title($this->request->getPost('title'), '-', true);

>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
        $model->save([
            'title'          => $this->request->getPost('title'),
            'author'         => $this->request->getPost('author'),
            'genre'          => $this->request->getPost('genre'),
            'published_year' => $this->request->getPost('published_year'),
            'description'    => $this->request->getPost('description'),
            'slug'           => $slug,
<<<<<<< HEAD
            'image'          => $imageName,
        ]);

        return redirect()->to('/books')->with('success', 'Book added successfully!');
=======
        ]);

        return redirect()->to('/books');
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    }

    public function view($slug = null)
    {
<<<<<<< HEAD
        $model = new BookModel();
=======
        $model = new BookModel(); // ? consistency again
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
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
<<<<<<< HEAD
=======
    
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
}
