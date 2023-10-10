<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\MealModel;

class MealController extends BaseController
{
    public function index()
    {
        return view('pages/meal/mealAdd');
    }

    //Add Data
    public function mealAdd()
    {
        $signUp = new MealModel();
        $data = 
        [
            'bfast'=>$this->request->getPost('bfast'),
            'lunch'=>$this->request->getPost('lunch'),
            'dinner'=>$this->request->getPost('dinner'),
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
            'bfast'=>$this->request->getPost('bfast'),
            'lunch'=>$this->request->getPost('lunch'),
            'dinner'=>$this->request->getPost('dinner'),
        ];
        $update->update($meal_id, $data);
        return redirect('mealView');
    }
}
