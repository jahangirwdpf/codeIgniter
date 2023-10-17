<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DepositeModel;
use App\Models\MealModel;
use App\Models\PurcheseModel;
use App\Models\RentModel;
use App\Models\UserModel;

class ReportsController extends BaseController
{
    // Monthly Summary
    public function index()
    {
        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->first();
		$data['depSum'] = $result['sumQuantities'];

        $meal = new MealModel();
        $result = $meal->select('(bfast + lunch + dinner) as sumQuantities')->first();
		$data['mealSum'] = $result['sumQuantities'];

        $purchase = new PurcheseModel();
        $result = $purchase->select('sum(price) as sumQuantities')->first();
		$data['purSum'] = $result['sumQuantities'];

        $rent = new RentModel();
        $result = $rent->select('sum(rent + gas + current + wifi + bua + city) as sumQuantities')->first();
		$data['rentSum'] = $result['sumQuantities'];

        return view('pages/reports/monthly_summary',$data);
    }

    // Invisual Summary
    public function Edit($member_id = null)
    {
        $member = new UserModel();
        $data['memberI'] = $member->where('id', $member_id)->first();

        $update=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
        ];
        
        $member = new UserModel();
		$data['memberSum'] = $member->get()->getNumRows();

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as sumQuantities')->first();
		$data['mealSum'] = $result['sumQuantities'];

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as sumQuantities')->where('member_id', $member_id)->first();
		$data['meal_I'] = $result['sumQuantities'];

        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->first();
		$data['depSum'] = $result['sumQuantities'];

        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->where('member_id', $member_id)->first();
		$data['dep_I'] = $result['sumQuantities'];

        $rent = new RentModel();
        $result = $rent->select('sum(rent + gas + current + wifi + bua + city) as sumQuantities')->first();
		$data['rentSum'] = $result['sumQuantities'];

        $purchase = new PurcheseModel();
        $result = $purchase->select('sum(price) as sumQuantities')->first();
		$data['purSum'] = $result['sumQuantities'];

        $purchase = new PurcheseModel();
        $result = $purchase->select('sum(price) as sumQuantities')->where('member_id', $member_id)->first();
		$data['pur_I'] = $result['sumQuantities'];

        return view('pages/reports/indivisual', $data);
    }

    public function update($member_id = null)
    {
        $update=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
        ];

        $update->update($member_id, $data);
        return redirect('reportI');
    }

    public function abc($member_id = null)
    {
        $update=  new UserModel();
        $data = 
        [
            'name'=>$this->request->getPost('name'),
        ];

        $update->update($member_id, $data);

        return view('pages/reports/indivisual', $data);
    }
}
