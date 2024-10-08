<?php

use App\Http\Controllers\MakeController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get("test",function(){
//     return ["name"=>"Chaman","age"=>"24"];
// });

Route::get("students",[StudentController::class,'list']);
Route::post("add-student",[StudentController::class,'addStudent']);
Route::put("update-student",[StudentController::class,'updateStudent']);
Route::delete("delete-student/{id}",[StudentController::class,'deleteStudent']);
Route::get("search-student/{name}",[StudentController::class,'searchStudent']);

Route::resource('member', MakeController::class);
