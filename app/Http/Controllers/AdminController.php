<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest; 
class AdminController extends Controller
{
    

    // function login
    public function login (AuthRequest $request ) { 
        return $request ;
    }
}
