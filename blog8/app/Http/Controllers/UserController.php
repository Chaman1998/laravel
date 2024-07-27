<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function login(Request $req){
        echo "Request Method is : ".$req->method()."<br/>";
        echo "Request path is : ".$req->path()."<br/>";
        echo "Request url is : ".$req->url()."<br/>";
        echo "Name is : ".$req->input('name')."<br/>";

        if($req->isMethod('post')){
            echo "Post method";
        }else{
            echo "Other method";
        }
    }
}
