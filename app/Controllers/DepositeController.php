<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\DepositeModel;

Class DepositeController extends BaseController {
    public function index()
    {
        return view('pages/deposite/depAdd');
    }

//Add Data
    public function depoAdd()
    {
        $signUp = new DepositeModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
        ];
        $signUp->save($data);
        return redirect('depositeAdd');
    }

//View All Data
    public function fetchdep()
    {
        $view = new DepositeModel();
        $data['view'] = $view->orderBy('id', 'DESC')->findAll();
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
        $data['view'] = $view->where('id', $dep_id)->first();
        return view('pages/deposite/depEdit', $data);
    }

    //Update Data
    public function update($dep_id = null)
    {
        $update=  new DepositeModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
        ];
        $update->update($dep_id, $data);
        return redirect('depositeView');
    }
}