<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[UserController::class,'userHome']);

// Route::view('/home','home');

Route::get('/about/{name}', function($name){
    // echo $name;
    return view('about',['name'=>$name]);
});

//Controller
Route::get('user',[UserController::class,'getUser']);
Route::get('aboutuser',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'getUsername']);
Route::get('viewuser',[UserController::class,'viewUser']);
Route::get('viewuser/{name}',[UserController::class,'viewUsername']);


Route::view('user-form','user-form');
Route::post('adduser',[FormController::class,'addUser']);
