<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MessageModel;

class ContactController extends Controller
{
    public function submit()
    {
        $request = \Config\Services::request();

        // Get and sanitize input
        $name = esc($request->getPost('name'));
        $email = esc($request->getPost('email'));
        $message = esc($request->getPost('message'));

        // Load the model and save data
        $model = new MessageModel();
        $model->save([
            'name' => $name,
            'email' => $email,
            'message' => $message
        ]);

        // OPTIONAL: Flash message for confirmation (requires session)
        session()->setFlashdata('success', 'Your message has been sent successfully.');

        // Redirect back to the contact page or a thank you page
        return redirect()->to('/contact');
    }
}
