<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DepositeModel;
use App\Models\MealModel;
use App\Models\PurcheseModel;
use App\Models\RentModel;
use App\Models\UserModel;
use App\Models\PayModel;

class ReportsController extends BaseController
{
    // Monthly Summary --------------------------------------------------------
    public function index()
    {
        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->first();
		$data['depSum'] = $result['sumQuantities'];

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as sumQuantities')->first();
		$data['mealSum'] = $result['sumQuantities'];

        $purchase = new PurcheseModel();
        $result = $purchase->select('sum(price) as sumQuantities')->first();
		$data['purSum'] = $result['sumQuantities'];

        $rent = new RentModel();
        $result = $rent->select('sum(rent + gas + current + wifi + bua + city) as sumQuantities')->first();
		$data['rentSum'] = $result['sumQuantities'];

        $pay = new PayModel();
        $result = $pay->select('sum(amount) as sumQuantities')->first();
		$data['paySum'] = $result['sumQuantities'];

        return view('pages/reports/monthly_summary',$data);
    }

    // Reports Part Invisual -------------------------------------------- 
    public function Edit($member_id = null)
    {
        $member = new UserModel();
        $data['memberI'] = $member->join('meal','member.id = meal.member_id')
        ->where('id', $member_id)->first();
        
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


    // Final Reports Part -----------------------------------------------------------------------
    public function Abc($member_id = null)
    {
        $member = new UserModel();
        $data['memberI'] = $member->join('meal','member.id = meal.member_id')
        ->where('id', $member_id)->first();
        
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

        $pay = new PayModel();
        $result = $pay->select('sum(amount) as sumQuantities')->where('member_id', $member_id)->first();
		$data['pay_I'] = $result['sumQuantities'];

        return view('pages/reports/final', $data);
    }
}
