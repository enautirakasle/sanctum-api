<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){

        $fields = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create($request->all());

        // $token = $request->user()->createToken($request->token_name);
        $token = $user->createToken($request->name);
 
        // return ['token' => $token->plainTextToken];
        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];
        // return $request->name . " ok";

    }

    public function login(Request $request){
        // return 'login';
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);
        
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return [
                'message' => 'Pasahitza edo .... gaizki.'
            ];
        }

        $token = $user->createToken($user->name);


        return [
            'user' => $user,
            'token' => $token->plainTextToken
        ];

    }

    public function logout(){
        return 'logout';
    }
}
