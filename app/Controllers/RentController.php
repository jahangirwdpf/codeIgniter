<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\RentModel;
use App\Models\UserModel;

class RentController extends BaseController
{
    public function index()
    {
        return view('pages/houseRent/rentAdd');
    }

    public function houseRent()
    {
        $signup = new RentModel();
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
        $member = new UserModel();
		$data['memberSum'] = $member->get()->getNumRows();

        $rent = new RentModel();
        $data['rent'] = $rent->orderBy('id', 'DESC')->findAll();
        return view('pages/houseRent/rentView', $data);
    }

    public function Edit($rent_id = null)
    {
        $rent = new RentModel();
        $data['rent'] = $rent->where('id', $rent_id)->first();
        return view('pages/houseRent/rentEdit', $data);
    }

    public function update($rent_id = null)
    {
        $update=  new RentModel();
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
        $rent = new RentModel();
        $rent->delete($rent_id);
        return redirect('rentView');
    }  
}