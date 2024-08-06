<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('send-email',[MailController::class,'sendEmail']);

Route::view('send-email','send-email');