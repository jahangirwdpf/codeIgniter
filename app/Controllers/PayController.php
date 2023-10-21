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
            'date'=>$this->request->getPost('date'),
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
        $data['pay'] = $view->join('member','member.id = pay.member_id')->orderBy('pm_id', 'DESC')->findAll();
        return view('pages/payment/payView', $data);
    }

    //Delete data
    public function delete($pay_id = null)
    {
        $view = new PayModel();
        $view->delete($pay_id);
        return redirect('payView');
    }

    //Edit Data
    public function Edit($pay_id = null)
    {
        $view = new PayModel();
        $data['pay'] = $view->where('pm_id', $pay_id)->first();
        return view('pages/payment/payEdit', $data);
    }

    //Update Data
    public function update($pay_id = null)
    {
        $update=  new PayModel();
        $data = 
        [
            'date'=>$this->request->getPost('date'),
            'member_id'=>$this->request->getPost('member_id'),
            'amount'=>$this->request->getPost('amount'),
        ];
        $update->update($pay_id, $data);
        return redirect('payView');
    }
}
