<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepositeModel;
use App\Models\MealModel;
use App\Models\PurcheseModel;
use App\Models\RentModel;

class DashboardController extends BaseController
{

    // public function __construct(){
    //     if(session()->get('isLoggedIn')!==TRUE){
    //         return redirect()->to('/login');
    //     }
    // }

    public function index()
    {
        $member = new UserModel();
		$data['memberSum'] = $member->get()->getNumRows();

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
        
        return view('dashboard',$data);
    }
    
}


