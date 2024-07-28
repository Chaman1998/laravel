<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    //
    function addUser(Request $req){
        //Your db code
        $req->session()->flash('message', 'User data added successfully');
        return redirect('adduser');
        // echo session('message');
    }
}
