<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }

    public function home(): string
    {
        return view('pages/home');
    }

    public function login()
    {
<<<<<<< HEAD
        return view('pages/login'); // This shows your login form
=======
        return view('pages/login'); // This shows your beautiful login form
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    }

    public function login_submit()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
<<<<<<< HEAD
            // Login success
            $session->set([
                'user_id'   => $user['id'],
                'username'  => $user['username'],
=======
            // ? Login success
            $session->set([
                'user_id' => $user['id'],
                'username' => $user['username'],
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
                'logged_in' => true
            ]);
            return redirect()->to('/books');
        } else {
<<<<<<< HEAD
            // Login failed
=======
            // ? Login failed
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            return redirect()->to('/login')->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('message', 'You have been logged out.');
    }

    public function view(string $page = 'home'): string
    {
<<<<<<< HEAD
        if (! is_file(APPPATH . "Views/pages/{$page}.php")) {
=======
        if (!is_file(APPPATH . "Views/pages/{$page}.php")) {
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view("pages/{$page}")
            . view('templates/footer');
    }

<<<<<<< HEAD
    // External Google Books API Search
=======
    // ? NEW METHOD: External Book Search
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    public function external_books()
    {
        $query = $this->request->getGet('q');
        $books = [];

        if ($query) {
            $apiUrl = 'https://www.googleapis.com/books/v1/volumes?q=' . urlencode($query);
            try {
                $response = file_get_contents($apiUrl);
                $data = json_decode($response, true);
                $books = $data['items'] ?? [];
            } catch (\Exception $e) {
<<<<<<< HEAD
=======
                // Optional: log the error
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
                log_message('error', 'Book API Error: ' . $e->getMessage());
            }
        }

        return view('pages/external_books', [
            'query' => $query,
            'books' => $books
        ]);
    }
}
