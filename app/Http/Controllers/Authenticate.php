<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Authenticate extends Controller
{
    public function login(){

        return view('Frontend.login');
    }

    public function register(){

        return view('Frontend.register');
    }

    public function store(Request $request){

        $user = $request->all();
        User::Create([
            'name' =>$request->get('name'),
            'email' =>$request->get('email'),
            'password' =>$request->get('password'),

        ]);

        return redirect()->route('dashboard');
    } 
}
