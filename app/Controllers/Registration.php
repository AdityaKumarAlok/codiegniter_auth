<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\userModel;

class Registration extends BaseController
{
    public function register()
    {
        echo view('common/header');
        return view('register');
    }

    public function auth_register()
    {
        $userModel = new UserModel();
        
        $firstname = $this->request->getPost('firstname');
        $lastname = $this->request->getPost('lastname');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $password = password_hash($password,PASSWORD_BCRYPT);

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password
        ];

        $add = $userModel->save($data);

        if ($add) {
            echo "User Registered Successfully";
        } else {
            echo "Error in registering user ";
    
        }
    }
}