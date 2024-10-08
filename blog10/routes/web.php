<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('add','add-student');
Route::post('add',[StudentController::class,'add']);

Route::view('list','list-student');
Route::get('list',[StudentController::class,'list']);

//Delete
Route::get('delete/{id}',[StudentController::class,'delete']);

//Edit
Route::get('edit/{id}',[StudentController::class,'edit']);

Route::put('edit-student/{id}',[StudentController::class,'editStudent']);

//Search
Route::get('search',[StudentController::class,'search']);

//Delete Selected Data only
Route::post('delete-multi',[StudentController::class,'deleteMultiple']);