<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function getUser(){
        $respond = Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response= $respond->body();

        return view('user',['data'=>json_decode($response)]);

    }
}
