<?php

namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController

{
    public function index()
    {
        return view('pages/login');
    }
    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            // $authenticatePassword = password_verify($password, $pass);
            if($pass == $password){
                $ses_data = [
                    // 'id' => $data['id'],
                    // 'name' => $data['name'],
                    // 'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('dashboard');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/login');
                // echo "Password is incorrect";
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/login');
            // echo "Email does not exist.";
        }

        return view('Backend/dashboard');
    }

    public function logout()
     {
         $session = session();
         $session->destroy();
         return redirect()->to('/login');
     }

    public function signUp()
    {
        return view('pages/signUp');
    }
}