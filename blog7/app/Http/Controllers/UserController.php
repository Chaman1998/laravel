<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function queries(){
        // return "Que";
        // $result =DB::table('users')->get();
        // $result =DB::table('users')->first();
        // $result = [$result];

        // $result =DB::table('users')->where('id','1')->get();
        // return view('users',['users'=>$result]);

        //Insert data
        // $result =DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tony@gmail.com',
        //     'phone'=>'736453627'
        // ]);
        // if($result){
        //     return "Data Inserted";
        // }else{
        //     return "Data not Inserted";
        // }
        // return view('users',['users'=>$result]);

        //Data update
        // $result = DB::table('users')->where('name','chaman')
        // ->update(['phone'=>'1827354637']);
        // if($result){
        //     return "Data updated";
        // }else{
        //     return "Data not updated";
        // }

        //Data delete
        // $result = DB::table('users')->where('name','chaman')
        // ->delete();
        // if($result){
        //     return "Data updated";
        // }else{
        //     return "Data not updated";
        // }
    }
}
