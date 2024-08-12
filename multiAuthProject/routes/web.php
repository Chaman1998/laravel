<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'account'], function () {

    //Guest middleware
    Route::group(['middleware' => 'guest'], function () {
        //Login Page
        Route::get('login', [LoginController::class, 'index'])->name('account.login');

        //Register Page
        Route::get('register', [LoginController::class, 'register'])->name('account.register');

        //Process page
        Route::post('process-register', [LoginController::class, 'processRegister'])->name('account.processRegister');

        //Authenticate Page
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
    });
    //Authenticated middleware
    Route::group(['middleware' => 'auth'], function () {
        //Logout Page
        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');

        //Dashboard
        Route::get('dashboard', [DashboardController::class, 'index'])->name('account.dashboard');
    });
});

Route::group(['prefix' => 'admin'], function () {

    //Guest middleware for admin
    Route::group(['middleware' => 'admin.guest'], function () {
        //Admin Login Page
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');

        //Authenticate Page
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    //Authenticated middleware for admin
    Route::group(['middleware' => 'admin.auth'], function () {
        //Admin Dashboard page
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        //Logout Page
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});
