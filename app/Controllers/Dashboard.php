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

<<<<<<< HEAD
=======
        // $mealR = new MealModel();
        // $result = $mealR->select('avg(bfast / lunch) as avgQuantities')->first();
		// $data['totalM'] = $result['avgQuantities'];

>>>>>>> 09dbc2862e807c9ef85cfcf3b05a584eb1783e59
        return view('dashboard',$data);
    }
    
}


