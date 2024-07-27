<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('students',[StudentController::class,'getStudents']);

Route::get('users',[UserController::class,'getUser']);