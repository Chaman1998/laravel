<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserLoginController extends Controller
{
    //
    public function login(){
        return view('user.login');
    }
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if($validator->passes()){

        }else{
            return redirect()->route('user.login')
            ->withInput()
            ->withErrors($validator);
        }
    }
}
