<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\DepositeModel;
use App\Models\MealModel;
use App\Models\PurcheseModel;
use App\Models\RentModel;

class ReportsController extends BaseController
{
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

        return view('pages/reports/monthly_summary',$data);
    }

    public function reportI()
    {
        $deposite = new DepositeModel();
        $result = $deposite->select('sum(price) as sumQuantities')->first();
		$data['sum'] = $result['sumQuantities'];

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as sumQuantities')->first();
		$data['total'] = $result['sumQuantities'];

        return view('pages/reports/indivisual', $data);
    }
}
