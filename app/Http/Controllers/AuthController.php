<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Models\User;

class AuthController extends Controller
{

        // Function Login
        public function login (AuthRequest $request)
         {        
            $user =  (new User())->getUserByEmailOrPhone($request->all()); 
            if ($user && Hash::check($request->input('password') , $user->password)) {
               $user_data['token'] = $user->createToken($user->email)->plainTextToken ; 
               $user['name'] = $user->name ;
               $user['phone'] = $user->phoen ;
               $user['email'] = $user->email ;
               $user['photo'] = $user->photo ;
            }
         }
}
