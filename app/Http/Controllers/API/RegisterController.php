<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterFormRequest;

class RegisterController extends Controller
{
    //

    public function register(RegisterFormRequest $request){
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type'   => 'Bearer',
        ]);
    }

    public function checkIfEmailExist(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);

        $email = User::where('email','=',$request->email)->get();
        if(count($email) > 0) {
            return response()->json([
                'Message' => 'Email Already Taken',
                'isNotUnique' => true,
            ]);
        }

        return response()->json([
            'Message' => 'Email Is Unique',
            'isNotUnique' => false,
        ]);
    }
}
