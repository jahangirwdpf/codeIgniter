<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;

class MemberController extends BaseController
{
    public function index()
    {
        return view('pages/member/memberAdd');
    }

    public function memberSignup()
    {
        $signup =  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'address'=>$this->request->getPost('address'),
            'mobile'=>$this->request->getPost('mobile'),
            'password'=>$this->request->getPost('password')
        ];
        $signup->save($data);
        return redirect('memberAdd');
    }

    // View All
    public function fetchmember()
    {
        $member = new UserModel();
        $data['member'] = $member->orderBy('id', 'DESC')->findAll();
        return view('pages/member/memberView', $data);
    }

    // Edit
    public function Edit($member_id = null)
    {
        $member = new UserModel();
        $data['member'] = $member->where('id', $member_id)->first();
        return view('pages/member/memberEdit', $data);
    }

    public function update($member_id = null)
    {
        $update=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'address'=>$this->request->getPost('address'),
            'mobile'=>$this->request->getPost('mobile'),
            'password'=>$this->request->getPost('password')
        ];

        $update->update($member_id, $data);
        return redirect('memberView');
    }

    //delete
    public function delete($member_id = null)
    {
        $member = new UserModel();
        $member->delete($member_id);
        return redirect('memberView');
    }

    // fetch data for dashboard 
    public function fetchmemberDash()
    {
        $data['member'] = $member->orderBy('id', $member_id)->findAll();

        return redirect('memberView', $data);
    }

    // View All
    public function fetchmem()
    {
        $member = new UserModel();
        $data['member'] = $member->orderBy('id', 'DESC')->findAll();
        return view('pages/reports/abc', $data);
    }
}