<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function gallery()
    {
        return view('pages/gallery');
    }
    public function contact()
    {
        return view('pages/contact');
    }
}


