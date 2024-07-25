<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "List of students";
    }
    function add(){
        return "Add students";
    }
    function delete(){
        return "Delete students";
    }
}
