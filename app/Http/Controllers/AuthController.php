<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
            'toker' => $token
        ];
        // return $request->name . " ok";

    }

    public function login(){
        return 'login';
    }

    public function logout(){
        return 'logout';
    }
}
