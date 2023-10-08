<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\HouseRent;

class HouseRentAdd extends BaseController
{
    public function index()
    {
        return view('pages/houseRent/rentAdd');
    }
    
    public function houseRent()
    {
        $signup = new HouseRent();
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

    public function fetchrent()
    {
        $rent = new HouseRent();
        $data['rent'] = $rent->orderBy('id', 'DESC')->findAll();
        return view('pages/houseRent/rentView', $data);
    }

    public function Edit($rent_id = null)
    {
        $rent = new HouseRent();
        $data['rent'] = $rent->where('id', $rent_id)->first();
        return view('pages/houseRent/rentEdit', $data);
    }

    public function update($rent_id = null)
    {
        $update=  new HouseRent();
        $data = 
        [
            'rent'=>$this->request->getPost('rent'),
            'gas'=>$this->request->getPost('gas'),
            'current'=>$this->request->getPost('current'),
            'wifi'=>$this->request->getPost('wifi'),
            'bua'=>$this->request->getPost('bua'),
            'city'=>$this->request->getPost('city'),
        ];

        $update->update($rent_id, $data);
        return redirect('rentView');
    }

    public function delete($rent_id = null)
    {
        $rent = new HouseRent();
        $rent->delete($rent_id);
        return redirect('rentView');
    }
    
    
}