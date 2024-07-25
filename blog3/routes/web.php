<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('student')->group(function () {
    Route::view('home', 'home');
    Route::get('show',[HomeController::class, 'show']);
    Route::get('add',[HomeController::class, 'add']);
});

Route::controller(StudentController::class)->group(function(){
    Route::get('studentshow','show');
    Route::get('studentadd','add');
    Route::get('studentdelete','delete');

});