<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PurcheseModel;
use App\Models\UserModel;

class PurcheseController extends BaseController
{
    public function index()
    {
        $user = new UserModel;
        $data['member'] = $user->orderBy('id', 'DESC')->findAll();
        return view('pages/bazar/bazarAdd', $data);
    }
    //Add Data
    public function bazarAdd()
    {
        $signUp = new PurcheseModel();
        $data = 
        [
            'member_id'=>$this->request->getPost('member_id'),
            'date'=>$this->request->getPost('date'),
            'p_des'=>$this->request->getPost('p_des'),
            'price'=>$this->request->getPost('price'),
        ];
        $signUp->save($data);
        return redirect('bazarAdd');
    }

    //View All Data
    public function fetchbazar()
    {
        $view = new PurcheseModel();
        $data['bazar'] = $view->orderBy('p_id', 'DESC')->findAll();
        return view('pages/bazar/bazarView', $data);
    }

    //Delete data
    public function delete($product_id = null)
    {
        $view = new PurcheseModel();
        $view->delete($product_id);
        return redirect('bazarView');
    }

    //Edit Data
    public function Edit($product_id = null)
    {
        $view = new PurcheseModel();
        $data['bazar'] = $view->where('p_id', $product_id)->first();
        return view('pages/bazar/bazarEdit', $data);
    }

    //Update Data
    public function update($product_id = null)
    {
        $update=  new PurcheseModel();
        $data = 
        [
            'member_id'=>$this->request->getPost('member_id'),
            'date'=>$this->request->getPost('date'),
            'p_des'=>$this->request->getPost('p_des'),
            'price'=>$this->request->getPost('price'),
        ];
        $update->update($product_id, $data);
        return redirect('bazarView');
    }
}
