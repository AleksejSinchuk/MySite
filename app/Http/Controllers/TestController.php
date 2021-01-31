<?php

namespace App\Http\Controllers;

use App\Models\TestModel;


class TestController extends Controller
{



    //==============================CRUD=================================
    public function create(TestModel $test){
       $tst=TestModel::query()->create($test);
        return view('main',compact('data','tst'));
    }

    public function getTestByID($id){

        $tst=TestModel::with('questions')->get();
        echo($tst);

       // return view('main',compact('data','tst'));
    }

    public static function updateTest(TestModel $test){
        $tst=TestModel::query()->update($test);
        return view('main',compact('data','tst'));
    }

    public static function deleteTest($id){
        TestModel::query()->where('id',$id)->delete($id);
      $tst='OK';
        return view('main',compact('data','tst'));
    }
}
