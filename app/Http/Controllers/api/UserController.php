<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller


{
    function readAll()
    {

        $users = User::all();
        return response()->json([
            'data' => $users,
        ], 200 );
    }

    function register (Request $request) {
      $this->validate($request ,[
        'username'=>'required|min:4|unique:users',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:10',
      ]);
      User::create([
        'Username'=>$request->username,
        'Username'=>$request->email,
        'Username'=> Hash:: make ($request->username),
      ]);

      return response()->json([
        'data'=>$users,
      ],201);

    }

    function login (Request $request) {
        if(!Auth::attempt($request->only('email','password'))){
            return response()->json([
                'massage'=> 'Unauthorized'
            ],401);


        } 
        ////GAGAL LOGIN

        $user = User::where('email',$request->email)->firstOrFail();

       $token = $user->createToken('auth_token')->plainTextToken;
  
        return response()->json([
          'data'=>$users,
          'token' => $token,
        ],201);
  
      }
}
