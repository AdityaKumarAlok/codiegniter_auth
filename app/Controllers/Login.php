<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\userModel;

class Login extends BaseController
{
    public function login()
    {
        echo view('common/header'); 
        return view('login');
        
    }
    public function login_auth()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        // echo "This Is Your Email" . $email;
        $result = $userModel->where('email',$email)->first();
        print_r($result);

    }
}
