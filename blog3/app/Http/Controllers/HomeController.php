<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show(){
        return "Student list";
    }
    function add(){
        return "add new student";
    }
}
