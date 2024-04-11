<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('Frontend.home');
    }

    public function menu(){
        return view('layouts.menu');
    }

    public function footer(){
        return view('layouts.footer');
    }
    //test code home screen HTML CSS
    public function test(){
        return view('Frontend.test');
    }
}
