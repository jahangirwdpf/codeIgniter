<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PayModel;
use App\Models\UserModel;

class PayController extends BaseController
{
    public function index()
    {
        $user = new UserModel;
        $data['member'] = $user->orderBy('id', 'DESC')->findAll();
        return view('pages/payment/payAdd', $data);
    }

    public function payAdd()
    {
        $signUp = new PayModel();
        $data = 
        [
            'member_id'=>$this->request->getPost('member_id'),
            'amount'=>$this->request->getPost('amount'),
        ];
        $signUp->save($data);
        return redirect('final');
    }

    //View All Data
    public function fetchpay()
    {
        $view = new PayModel();
        $data['pay'] = $view->orderBy('pm_id', 'DESC')->findAll();
        return view('pages/payment/payView', $data);
    }

    //Delete data
    public function delete($product_id = null)
    {
        $view = new PayModel();
        $view->delete($product_id);
        return redirect('bazarView');
    }

    //Edit Data
    public function Edit($product_id = null)
    {
        $view = new PayModel();
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
