<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //User Dashboard
    public function dashboard(){
        return view('user.dashboard');
    }
}
