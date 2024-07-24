<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    //
    function show(){
        // return view('named');
        // return redirect()->to('name');
        return to_route('n');
    }
}
