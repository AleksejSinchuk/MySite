<?php

namespace App\Http\Controllers;
use App\Models\VacancyModel;
use App\Http\Requests\VacancyRequest;



//class VacancyController extends Controller
class VacancyController extends GeneralController
{
    public function __construct(VacancyModel $model,VacancyRequest $request)
    {
        $this->request=$request;
        $this->model=$model;
    }

//    public static function index(){
//        $data="vacancyController : index";
//        return view('main',compact('data','data'));
//    }
//
////==================CRUD=========================================
//    public static function createVacancy(VacancyModel $vac){
//        $vacancy=VacancyModel::query()->create($vac);
//        return view('main',compact('data','vacancy'));
//    }
//    public static function getVacancies(){
//        $vacancy=VacancyModel::query()->get()->all();
//        return view('main',compact('data','vacancy'));
//    }
//
//    public static function getVacancyById($id){
//        $vacancy=VacancyModel::query()->get($id);
//        return view('main',compact('data','vacancy'));
//    }
//
//
//    public static function updateVacancy(VacancyModel $vac){
//        $vacancy=VacancyModel::query()->update($vac);
//        return view('main',compact('data','vacancy'));
//    }
//
//    public static function deleteVacancy($id){
//        $vacancy=VacancyModel::query()->delete($id);
//        return view('main',compact('data','vacancy'));
//    }

}
