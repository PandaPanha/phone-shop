<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authenticate extends Controller
{
    public function login(){
        return view('Frontend.login');
    }
}
