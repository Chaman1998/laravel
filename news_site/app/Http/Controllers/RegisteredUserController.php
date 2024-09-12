<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    //Signup View
    public function signup()
    {
        return view('pages.signup');
    }

    //Signup Process
    public function processRegister(Request $request)
    {
        // Validate Data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()]
        ]);

        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->route('pages.login')
                ->with('success', 'You have registered successfully');
        } else {
            return redirect()->route('pages.signup') // Update this to 'signup'
                ->withInput()
                ->withErrors($validator);
        }
    }

}
