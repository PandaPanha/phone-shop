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

        $product->product_code  = $request->product_code;
        $product->storage       = $request->storage;
        $product->display       = $request->display;
        $product->ram           = $request->ram;
        $product->processor     = $request->processor;
        $product->camera        = $request->camera;
        $product->battery       = $request->battery;
        $product->warranty      = $request->warranty;
        $product->price         = $request->price;
        $product->save();

        return redirect()->route('list.phone',['product'=>$product]);

    }

    public function detail(Product $product){

        return view('admin.phones.components.detail_phone',compact('product'));

    }

    public function destroy($id){
        $product = Product::findOrFail($id);

        //Delete the product
        $product->delete();

        return redirect()->route('list.phone');
    }
}
