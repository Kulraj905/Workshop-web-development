<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MessageModel;

class ContactController extends Controller
{
<<<<<<< HEAD
    public function index()
    {
        return view('pages/contact');
    }

    public function submit()
    {
        // Access the request object via $this->request
        $name = esc($this->request->getPost('name'));
        $email = esc($this->request->getPost('email'));
        $message = esc($this->request->getPost('message'));
=======
    public function submit()
    {
        $request = \Config\Services::request();

        // Get and sanitize input
        $name = esc($request->getPost('name'));
        $email = esc($request->getPost('email'));
        $message = esc($request->getPost('message'));
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7

        // Load the model and save data
        $model = new MessageModel();
        $model->save([
<<<<<<< HEAD
            'name'    => $name,
            'email'   => $email,
            'message' => $message
        ]);

        // Set a flash message for confirmation
        session()->setFlashdata('success', 'Your message has been sent successfully.');

        // Redirect back to the contact page
        return redirect()->to('pages/contact');
=======
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        // OPTIONAL: Flash message for confirmation (requires session)
        session()->setFlashdata('success', 'Your message has been sent successfully.');

        // Redirect back to the contact page or a thank you page
        return redirect()->to('/contact');
>>>>>>> 26240d2c5dea2d6a908a0fcbc16344a20f5bdef7
    }
}
