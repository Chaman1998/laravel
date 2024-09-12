<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginUserController extends Controller
{
    //Login View
    public function login()
    {
        return view('pages.login');
    }

    public function processLogin(Request $request)
    {

        //Define Rules
        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];

        // Validate the incoming request
        $validate = Validator::make($request->all(), $rules);

        // If validation fails, redirect back with errors
        if ($validate->fails()) {
            return redirect()->back()
                ->withErrors($validate)
                ->withInput();
        }

        // Attempt to authenticate the user using the email and password
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful
            $request->session()->regenerate();

            // Redirect to the intended page or home page after login
            return redirect()->intended('/')->with('success', 'Login successful!');
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }
}
