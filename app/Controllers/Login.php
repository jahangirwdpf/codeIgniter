<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('pages/login');
    }
    public function signUp()
    {
        return view('pages/signUp');
    }
}