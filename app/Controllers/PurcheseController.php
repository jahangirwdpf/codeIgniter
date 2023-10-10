<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PurcheseModel;

class PurcheseController extends BaseController
{
    public function index()
    {
        return view('pages/mealPurchese/bazarAdd');
    }
    //Add Data
    public function bazarAdd()
    {
        $signUp = new PurcheseModel();
        $data = 
        [
            'p_des'=>$this->request->getPost('p_des'),
            'price'=>$this->request->getPost('price'),
            'comment'=>$this->request->getPost('comment'),
        ];
        $signUp->save($data);
        return redirect('bazarAd');
    }

//View All Data
    // public function fetchbazar()
    // {
    //     $view = new PurcheseModel();
    //     $data['view'] = $view->orderBy('p_id', 'DESC')->findAll();
    //     return view('pages/mealPurchese/bazarView', $data);
    // }

    // //Delete data
    // public function delete($product_id = null)
    // {
    //     $view = new PurcheseModel();
    //     $view->delete($product_id);
    //     return redirect('bazarView');
    // }

    // //Edit Data
    // public function Edit($product_id = null)
    // {
    //     $view = new PurcheseModel();
    //     $data['view'] = $view->where('id', $product_id)->first();
    //     return view('pages/mealPurchese/bazarEdit', $data);
    // }

    // //Update Data
    // public function update($product_id = null)
    // {
    //     $update=  new PurcheseModel();
    //     $data = 
    //     [
    //         'p_des'=>$this->request->getPost('p_des'),
    //         'price'=>$this->request->getPost('price'),
    //         'comment'=>$this->request->getPost('comment'),
    //     ];
    //     $update->update($product_id, $data);
    //     return redirect('bazarView');
    // }
}
