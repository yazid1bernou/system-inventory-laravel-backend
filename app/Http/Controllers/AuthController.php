<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

        // Function Login
       final public function login (AuthRequest $request)
         {        
            $user =  (new User())->getUserByEmailOrPhone($request->all()); 
            if ($user && Hash::check($request->input('password') , $user->password)) {
               $user_data['token'] = $user->createToken($user->email)->plainTextToken ; 
               $user_data['name'] = $user->name ;
               $user_data['phone'] = $user->phoen ;
               $user_data['email'] = $user->email ;
               $user_data['photo'] = $user->photo ;
               return  response()->json($user_data); 
            }
            throw ValidationException::withMessages([
              'email' => ['the provider credencial Incorrect '] 
            ]);
         }

         final public function logout() {
            auth()->user()->tokens()->delete();
            return response()->json(['msg' => 'You have Successufully Logged out !']);
         }
}
