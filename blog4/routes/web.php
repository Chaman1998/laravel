<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home')->middleware('check1');
Route::view('about','about');