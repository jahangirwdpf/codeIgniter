<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MealModel;
use App\Models\UserModel;

class MealController extends BaseController
{
    public function index()
    {
        $user = new UserModel;
        $data['member'] = $user->orderBy('id', 'DESC')->findAll();
        return view('pages/meal/mealAdd',$data);
    }

    //Add Data
    public function mealAdd()
    {
        $signUp = new MealModel();
        $data = 
        [
            'member_id'=>$this->request->getPost('member_id'),
            'date'=>$this->request->getPost('date'),
            'bfast'=>$this->request->getPost('bfast'),
            'lunch'=>$this->request->getPost('lunch'),
            'dinner'=>$this->request->getPost('dinner'),
            'member_id'=>$this->request->getPost('member_id'),
        ];
        $signUp->save($data);
        return redirect('mealAdd');
    }

    //View All Data
    public function fetchmeal()
    {
        $view = new MealModel();
        $data['meal'] = $view->orderBy('m_id', 'DESC')->findAll();
        return view('pages/meal/mealView', $data);

        $meal = new MealModel();
        $result = $meal->select('sum(bfast + lunch + dinner) as Quantities')->first();
		$data['meal'] = $result['Quantities'];
    }

    //Delete data
    public function delete($meal_id = null)
    {
        $view = new MealModel();
        $view->delete($meal_id);
        return redirect('mealView');
    }

    //Edit Data
    public function Edit($meal_id = null)
    {
        $view = new MealModel();
        $data['meal'] = $view->where('m_id', $meal_id)->first();
        return view('pages/meal/mealEdit', $data);
    }

    //Update Data
    public function update($meal_id = null)
    {
        $update=  new MealModel();
        $data = 
        [
            'member_id'=>$this->request->getPost('member_id'),
            'date'=>$this->request->getPost('date'),
            'bfast'=>$this->request->getPost('bfast'),
            'lunch'=>$this->request->getPost('lunch'),
            'dinner'=>$this->request->getPost('dinner'),
            'member_id'=>$this->request->getPost('member_id'),
        ];
        $update->update($meal_id, $data);
        return redirect('mealView');
    }
}
