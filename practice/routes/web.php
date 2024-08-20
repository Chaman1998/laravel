<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\UserLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/'], function () {

    // Customer Middleware
    Route::group(['middleware' => 'guest'], function () {

        //User Login
        Route::get('login', [UserLoginController::class, 'login'])->name('user.login');

        //User Authenticate
        Route::post('authenticate', [UserLoginController::class, 'authenticate'])->name('user.authenticate');

        //User Register
        Route::get('register', [UserLoginController::class, 'register'])->name('user.register');

        //User Process Register
        Route::post('process-register', [UserLoginController::class, 'processRegister'])->name('user.processRegister');

    });

    //Customer Authenticated middleware
    Route::group(['middleware' => 'auth'], function () {

        //User Logout
        Route::get('logout', [UserLoginController::class, 'logout'])->name('user.logout');

        //User Dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('user.dashboard');
    });
});

Route::group(['prefix' => 'admin'], function () {
    // Admin Middleware
    Route::group(['middleware' => 'guest'], function () {

        //Admin Login
        Route::get('login', [AdminLoginController::class, 'login'])->name('admin.login');

        //Admin Authenticate
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    //Admin Authenticated middleware
    Route::group(['middleware' => 'auth'], function () {
        //Admin Dashboard
        Route::get('dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

        //Admin Logout
        Route::get('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
    });
});