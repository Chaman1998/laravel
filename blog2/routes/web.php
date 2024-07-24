<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');
Route::view('user','home');

Route::view('about','about');

Route::view('about/{name}','about');

Route::view('named','named')->name('n');
Route::get('show',[NameController::class,'show']);