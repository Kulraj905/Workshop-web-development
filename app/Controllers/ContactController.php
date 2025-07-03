<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MessageModel;

class ContactController extends Controller
{
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

        // Load the model and save data
        $model = new MessageModel();
        $model->save([
            'name'    => $name,
            'email'   => $email,
            'message' => $message
        ]);

        // Set a flash message for confirmation
        session()->setFlashdata('success', 'Your message has been sent successfully.');

        // Redirect back to the contact page
        return redirect()->to('pages/contact');
    }
}
