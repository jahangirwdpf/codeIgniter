<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class HouseRent extends BaseController
{
    public function index()
    {
        return view('pages/houseRent/rentAdd');
    }
    public function houseRent()
    {
        $signup = new UserModel();
        $data = 
        [
            'rent'=>$this->request->getPost('rent'),
            'gas'=>$this->request->getPost('gas'),
            'current'=>$this->request->getPost('current'),
            'wifi'=>$this->request->getPost('wifi'),
            'bua'=>$this->request->getPost('bua'),
            'city'=>$this->request->getPost('city'),
        ];
        $signup->save($data);
        return redirect('rentAdd');
    }
}