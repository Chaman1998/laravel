<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //Dashboard controller method
    public function index(){
        return view('dashboard');
    }
}
