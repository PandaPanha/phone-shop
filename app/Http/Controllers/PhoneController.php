<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function list(){

        $products= Product::all();
        return view('admin.phones.phone',compact('products'));
    }

    public function create(){

        return view('admin.phones.components.add_phone');
    }

    public function store(Request $request){
        $product = $request->all();
        Product::create([
            'product_code'  => $request->get('product_code'),
            'product_name'  => $request->get('product_name'),
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

    public function edit(Product $product){

        return view('admin.phones.components.edit_phone',['product' => $product]);
    }

    public function update(Request $request,Product $product){

        $product->product_code  = $product->product_code;
        $product->product_name  = $product->product_name;
        $product->storage       = $product->storage;
        $product->display       = $product->display;
        $product->ram           = $product->ram;
        $product->processor     = $product->processor;
        $product->camera        = $product->camera;
        $product->battery       = $product->battery;
        $product->warranty      = $product->warranty;
        $product->price         = $product->price;
        $product->save();

        return redirect()->route('list.phone',['product'=> $product]);

    }

    public function detail(Request $request, Product $product){
        $request = Product::get();
        return view('admin.phones.components.detail_phone',['product'=>$product]);
    }

    public function destroy($id){
        $product = Product::findOrFail($id);

        //Delete the product
        $product->delete();

        return redirect()->route('list.phone');
    }
}
