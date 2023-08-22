<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{

        // Function Login
        public function login (AuthRequest $request)
         {        
             return $request ;  
         }
}
