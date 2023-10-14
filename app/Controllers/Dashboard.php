<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\DepositeModel;
use App\Models\MealModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $member = new UserModel();
		$data['count'] = $member->get()->getNumRows();

        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->first();
		$data['sum'] = $result['sumQuantities'];

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as sumQuantities')->first();
		$data['total'] = $result['sumQuantities'];

        // $mealR = new MealModel();
        // $result = $mealR->select('avg(bfast / lunch) as avgQuantities')->first();
		// $data['totalM'] = $result['avgQuantities'];
        return view('dashboard',$data);
    }
    
}


