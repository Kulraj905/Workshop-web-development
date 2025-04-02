<?php

namespace App\Controllers;

use App\Models\BookModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Books extends BaseController
{
    public function index()
    {
        $model = new BookModel(); // ? Use "new" instead of "model()" helper

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
        helper('text'); // For slug

        $model = new BookModel(); // ? again, use "new BookModel()"

        $slug = url_title($this->request->getPost('title'), '-', true);

        $model->save([
            'title'          => $this->request->getPost('title'),
            'author'         => $this->request->getPost('author'),
            'genre'          => $this->request->getPost('genre'),
            'published_year' => $this->request->getPost('published_year'),
            'description'    => $this->request->getPost('description'),
            'slug'           => $slug,
        ]);

        return redirect()->to('/books');
    }

    public function view($slug = null)
    {
        $model = new BookModel(); // ? consistency again
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
