<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function list(){

        $products= Product::all();
        return view('admin.phones.phone',['products'=>$products]);
    }

    public function create(){

        return view('admin.phones.components.add_phone');
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create([
            'product_code'  => $request->get('product_code'),
            'storage'       => $request->get('storage'),
            'display'       => $request->get('display'),
            'ram'           => $request->get('ram'),
            'processor'     => $request->get('processor'),
            'camera'        => $request->get('camera'),
            'battery'       => $request->get('battery'),
            'warranty'      => $request->get('warranty'),
            'price'         => $request->get('price'),

        ]);

        return redirect()->route('list.phone');
        
    }
}
