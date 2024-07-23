<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function addUser(Request $request){

        $request->validate([
            'username'=>'required | min:3 | uppercase',
            'email'=>'required | email',
            'city'=>'required | min:4',
        ],[
            'username.required'=>'username can not be empty',
            'email.required'=>'Email can not be empty',
            'email.email'=>'Must be use proper Email ID',
            'city.required'=>'City can not be empty',
        ]);

        // php artisan lang:publish
        // for customize validation massage

        //for make own customized rule
        //php artisan make:rule Uppercase

        
        echo $request->username;
        echo "<br/>";
        echo $request->email;
        echo "<br/>";
        echo $request->city;
    }
}
