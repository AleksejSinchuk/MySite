<?php

use Illuminate\Support\Facades\Route;



//use App\Http\Controllers\MemberController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/','MainController@index');
Route::get('/test/{id}','TestController@getTestByID');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



Route::prefix('/vacancy')->group(function (){
    Route::get('/',['uses'=>'VacancyController@get']);
    Route::get('/{Id}',['uses'=>'VacancyController@getByID'])->where(['Id'=>'[0-9+]']);
    Route::post('/add',['uses'=>'VacancyController@create']);
    Route::delete('/delete/{Id}',['uses'=>'VacancyController@delete'])->where(['Id'=>'[0-9+]']);
    Route::put('/update/{Id}',['uses'=>'CompanyController@update'])->where(['Id'=>'[0-9+]']);
});

