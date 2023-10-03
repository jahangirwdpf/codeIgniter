<?php

namespace App\Controllers;

class MemberAdd extends BaseController
{
    public function index()
    {
        return view('memberAdd');
    }
    public function memberview()
    {
        return view('memberView');
    }
}