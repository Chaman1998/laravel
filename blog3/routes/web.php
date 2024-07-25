<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('student')->group(function () {
    Route::view('home', 'home');
    Route::get('show',[HomeController::class, 'show']);
    Route::get('add',[HomeController::class, 'add']);
});
