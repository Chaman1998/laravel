<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserLoginController extends Controller
{
    //
    public function login()
    {
        return view('user.login');
    }

    //Login Authenticate
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
            if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('user.dashboard');
            } else {
                return redirect()->route('user.login')->with('error','Either email or password is incorrect');
            }
        } else {
            return redirect()->route('user.login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    //User Registration
    public function register()
    {
        return view('user.register');
    }

    //User Registration Process
    public function processRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        if ($validator->passes()) {
            $user = new User();
            $user->fname = $request->fname;
            $user->lname = $request->lname;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            // $user->role = 'customer';
            $user->save();

            return redirect()->route('user.login')->with('success', 'You have register successfully');
        } else {
            return redirect()->route('user.register')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('user.login');
    }
}
