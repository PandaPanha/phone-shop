<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        $products = Product::all();
        return view('Frontend.home',compact('products'));
    }
    
    public function menu(){
        return view('layouts.menu');
    }

    public function footer(){
        return view('layouts.footer');
    }

    public function test(){
        return view('Frontend.test');
    }

    public function product(){
        return view('Frontend.selectProduct');
    }
}