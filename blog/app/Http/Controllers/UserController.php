<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser(){
        return "Chaman Sarkar";
    }

    function aboutUser(){
        return "About us from controller";
    }

    function getUsername($name){
        return "My name is ".$name;
    }

    //call view page with this function
    function viewUser(){
        return view("user");
    }
    function viewUsername($name){
        return view("getuser",['name'=>$name]);
    }
}
