@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Phone</span>
    </div>
  </nav>
  <table class="table table-bordered" >

    <div class="w-25">
      <a href="{{route('create.phone')}}" class="btn btn-success btn-lg w-50 active">Add Phone</a>
    </div>

    <tr class="text-center">
      <th scope="row">ID</th>
      <th>Code</th>
      <th>Name</th>
      <th>Storage</th>
      <th>Ram</th>
      <th>Camera</th>
      <th>Battery</th>
      <th>Display</th>
      <th>Image</th>
      <th>Price</th>
      <th>Action</th>

    </tr>
   
    @foreach ($products as $product)

      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->product_code}}</td>
        <td>{{$product->product_name}}</td>
        <td>{{$product->storage}}</td>
        <td>{{$product->ram}}</td>
        <td>{{$product->camera}}</td>
        <td>{{$product->battery}}</td>
        <td>{{$product->display}}</td>
        <td>{{$product->product_image->first()?->product_img ?? ''}}</td>
        <td>{{$product->price}}</td>
        <td>
          <form method="POST" action="{{route('delete.phone',['product'=>$product])}}">
            @csrf
            @method('DELETE')
            <a href="{{route('edit.phone',['product'=>$product])}}">Edit</a>
            <a href="{{route('detail.phone',['product'=>$product])}}">Detail</a>
            <button class="btn btn-block">Delete</button>
          </form>
        </td>
      </tr>

        
    @endforeach
  </table>
  

@endsection()
