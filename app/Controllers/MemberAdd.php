<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class MemberAdd extends BaseController
{
    public function index()
    {
        return view('memberAdd');
    }


    public function memberSignup()
    {
        $signup=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'address'=>$this->request->getPost('address'),
            'gender'=>$this->request->getPost('gender')
        ];

        $signup->save($data);
        return redirect('memberAdd');
    }

    public function fetchmember()
    {
        $member = new UserModel();
        $data['member'] = $member->orderBy('id', 'DESC')->findAll();
        return view('memberView', $data);
    }

    public function Edit($member_id = null)
    {
        $member = new UserModel();
        $data['member'] = $member->where('id', $member_id)->first();
        return view('memberEdit', $data);
    }

    public function update($member_id = null)
    {
        $update=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'address'=>$this->request->getPost('address'),
            'gender'=>$this->request->getPost('gender')
        ];

        $update->update($member_id, $data);
        return redirect('memberView');
    }

    public function delete($member_id = null)
    {
        $member = new UserModel();
        $member->delete($member_id);
        return redirect('memberView');
    }
}