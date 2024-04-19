<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function listProducts(){

        $products= Product::all();
        return view('Frontend.home',compact('products'));
    }

    public function home(){
        return view('Frontend.home');
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