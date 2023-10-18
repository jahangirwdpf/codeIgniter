<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\BristyModel;

Class BristyController extends BaseController {
    public function index()
    {
        return view('pages/bristy/bristyAdd');
    }

//Add Data
    public function bristyAdd()
    {
        $signUp = new BristyModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
        ];
        $signUp->save($data);
        return redirect('bristyAdd');
    }

//View All Data
    public function fetchbristy()
    {
        $view = new BristyModel();
        $data['view'] = $view->orderBy('id', 'DESC')->findAll();
        return view('pages/bristy/bristyView', $data);
    }

    //Delete data
    public function delete($bristy_id = null)
    {
        $view = new BristyModel();
        $view->delete($bristy_id);
        return redirect('bristyView');
    }
}