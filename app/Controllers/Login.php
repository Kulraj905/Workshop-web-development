<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function login()
    {
        // Display the login form
        return view('pages/login');
    }

    public function login_submit()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session->set([
                    'user_id' => $user['id'],
                    'user_email' => $user['email'],
                    'isLoggedIn' => true,
                ]);

                // OPTIONAL: Add success message (can remove if not needed)
                $session->setFlashdata('success', 'You have successfully logged in.');

                // ?? Redirect to books instead of non-existent dashboard
                return redirect()->to(site_url('books')); // ? change from 'dashboard' to 'books'
            } else {
                $session->setFlashdata('error', 'Incorrect password.');
            }
        } else {
            $session->setFlashdata('error', 'Email not found.');
        }

        return redirect()->to(site_url('login'));
    }

    public function register()
    {
        // Show the registration form
        return view('pages/register');
    }

    public function register_submit()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $confirm_password = $this->request->getPost('confirm_password');

        // Basic validation
        if ($password !== $confirm_password) {
            $session->setFlashdata('error', 'Passwords do not match.');
            return redirect()->to(site_url('register'));
        }

        // Check if user already exists
        if ($model->where('email', $email)->first()) {
            $session->setFlashdata('error', 'Email is already registered.');
            return redirect()->to(site_url('register'));
        }

        // Save the user
        $data = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
        ];

        $model->save($data);

        $session->setFlashdata('success', 'Registration successful. You can now log in.');
        return redirect()->to(site_url('login'));
    }

    public function logout()
    {
        // Destroy the session and redirect to login or home
        session()->destroy();
        return redirect()->to(site_url('login')); // or use site_url('/') for homepage
    }
}
