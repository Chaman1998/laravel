<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminLoginController extends Controller
{
    //Admin Login Controller
    public function login(){
        return view('admin.login');
    }

    //Admin Login Authenticate
    public function authenticate(Request $request)
    {
        // Define validation rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        // Validate the incoming request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->passes()) {
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login')->with('error','Either email or password is incorrect');
            }
        } else {
            return redirect()->route('admin.login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    //Admin Logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
