<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    //
    function login(Request $request)
    {
        // return "Login Function";

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return ["result" => "User not found", "success" => false];
        } else {
            // Generate the token
            $success['token'] = $user->createToken('MyApp')->plainTextToken;
            $success['name'] = $user->name;
            
            // Return the response
            return response()->json(['success' => true, 'result' => $success, 'msg' => 'User registered successfully.'], 201);
        
        }
    }

    function signup(Request $request)
    {
        // return "Signup Function";
        // $input = $request->all();
        // $input["password"]=bcrypt($input["password"]);

        // $user = User::create($input);

        // $success['token']=$user->createToken('MyApp')->plainTextToken;
        // $user['name']=$user->name;

        // return ['success'=>true,"result"=>$success,"msg"=>"User register successfully."];

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'errors' => $validator->errors()], 400);
        }

        // Encrypt the password
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        // Create the user
        $user = User::create($input);

        // Generate the token
        $success['token'] = $user->createToken('MyApp')->plainTextToken;
        $success['name'] = $user->name;

        // Return the response
        return response()->json(['success' => true, 'result' => $success, 'msg' => 'User registered successfully.'], 201);
    }
}
