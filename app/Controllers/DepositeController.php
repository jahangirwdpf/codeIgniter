<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DepositeModel;
use App\Models\UserModel;

Class DepositeController extends BaseController {
    public function index()
    {
        $user = new UserModel;
        $data['member'] = $user->orderBy('id', 'DESC')->findAll();
        return view('pages/deposite/depAdd', $data);
    }

//Add Data
    public function depoAdd()
    {
        $signUp = new DepositeModel();
        $data = 
        [
            'date'=>$this->request->getPost('date'),
            'member_id'=>$this->request->getPost('member_id'),
            'deposite'=>$this->request->getPost('deposite'),
            'price'=>$this->request->getPost('price'),
        ];
        $signUp->save($data);
        return redirect('depositeAdd');
    }

//View All Data
    public function fetchdep()
    {
        $view = new DepositeModel();
        $data['deposite'] = $view->orderBy('d_id', 'DESC')->findAll();
        return view('pages/deposite/depView', $data);
    }

    //Delete data
    public function delete($dep_id = null)
    {
        $view = new DepositeModel();
        $view->delete($dep_id);
        return redirect('depositeView');
    }

    //Edit Data
    public function Edit($dep_id = null)
    {
        $view = new DepositeModel();
        $data['deposite'] = $view->where('d_id', $dep_id)->first();
        return view('pages/deposite/depEdit', $data);
    }

    //Update Data
    public function update($dep_id = null)
    {
        $update=  new DepositeModel();
        $data = 
        [
            'date'=>$this->request->getPost('date'),
            'member_id'=>$this->request->getPost('member_id'),
            'deposite'=>$this->request->getPost('deposite'),
            'price'=>$this->request->getPost('price'),
        ];
        $update->update($dep_id, $data);
        return redirect('depositeView');
    }
}