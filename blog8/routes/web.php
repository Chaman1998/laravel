<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLogin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form','user');
Route::post('/user',[UserController::class,'login']);

//session
Route::view('login','login');
Route::view('profile','profile');

Route::post('login',[UserLogin::class,'login']);
Route::get('logout',[UserLogin::class,'logout']);

// Flash session
Route::view('adduser','adduser');
Route::post('add',[AddController::class,'addUser']);

//File Upload
Route::view('file','file');
Route::post('fileupload',[FileController::class,'file']);
