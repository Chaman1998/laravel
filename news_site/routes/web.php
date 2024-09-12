<?php

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('signup',[RegisteredUserController::class,'signup'])->name('signup');

Route::get('login',[LoginUserController::class,'login'])->name('login');

// User Process Register
Route::post('process-register',[RegisteredUserController::class,'processRegister'])->name('processRegister');

// User Process Login
Route::post('process-login',[LoginUserController::class,'processLogin'])->name('processLogin');

//User Logout
Route::get('logout', [LoginUserController::class, 'logout'])->name('logout');
