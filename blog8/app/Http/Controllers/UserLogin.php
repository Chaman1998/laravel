<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserLogin extends Controller
{
    //
    function login(Request $req){
        $req->session()->put('user',$req->input('name'));
        return redirect('profile');
    }

    function logout(Request $req){
        $req->session()->pull('user');
        return redirect('profile');

    }
}
