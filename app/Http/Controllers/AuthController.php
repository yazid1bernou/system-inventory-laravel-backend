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
            $user =  getUserByEmailOrPhone($request);
         }
}
