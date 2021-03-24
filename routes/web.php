<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('home',function(){
    return view('welcome');
});

// Route::get('/about-us/{category?}/{article}',function($c,$a){
//     $name='Sadman Chowdhury';
//     $email='sadman@gmail.com';
//    return view('about',compact('name','email'));
// });

Route::get('/history/{category}',[HistoryController::class,'home']);


//CRUD
Route::get('employees',[EmployeeController::class,'index']);
Route::get('create-employee',[EmployeeController::class,'create']);
Route::post('store-employee',[EmployeeController::class,'store']);

Route::get('edit-employee/{id}',[EmployeeController::class,'edit']);
Route::post('update-employee/{id}',[EmployeeController::class,'update']);

Route::get('delete-employee/{id}',[EmployeeController::class,'delete']);

//Authentication and Authorization

Route::get('login',[AuthController::class,'login']);
Route::post('storelogin',[AuthController::class,'loginstore']);


Route::group(['middleware' => 'checkloggedin'], function() 
    {
        Route::get('dashboard',[HomeController::class,'dashboard']);
    });

Route::get('logout', [AuthController::class,'logout']);


#Validation

Route::get('create-student',[StudentController::class,'create']);
Route::post('store-student',[StudentController::class,'store']);

Route::get('products',[ProductController::class,'all']);


#ImageUpload

Route::get('upload',[UploadController::class,'upload']);
Route::post('upload-image',[UploadController::class,'uploadImage']);