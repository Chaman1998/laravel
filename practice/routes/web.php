<?php

use App\Http\Controllers\user\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[UserLoginController::class,'login'])->name('user.login');
Route::post('/authenticate',[UserLoginController::class,'authenticate'])->name('user.authenticate');

