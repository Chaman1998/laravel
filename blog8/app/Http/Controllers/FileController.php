<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    //
    function file(Request $req){
        // return "File uploaded";
        $path = $req->file('file')->store('public');
        $fileNameArray = explode("/",$path);
        $fileName = $fileNameArray[1];
        return view('file',['path'=>$fileName]);
    }
}
