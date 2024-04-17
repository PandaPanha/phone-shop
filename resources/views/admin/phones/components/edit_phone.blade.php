@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
        <a href="http://127.0.0.1:8000/admin/phones" class="btn border-0 active" role="button" aria-pressed="true">Phone-></a>
        <a href="http://127.0.0.1:8000/admin/phones/components" class="btn border-0 active" role="button" aria-pressed="true">Add Phone</a>
      </span>
    </div>
  </nav>
  <div class="container-fluid bg-light p-4">
    <form action="{{route('update.phone')}}" method="POST">
        @csrf
        @method('put')
        <br>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Product Code:</label>
                    <input type="text" class="form-control" name="product_code"  placeholder="Enter Product Code" value="{{$product->product_code}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Storage:</label>
                    <input type="text" class="form-control" name="storage"  placeholder="Enter Storage" value="{{$product->storage}}">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Display:</label>
                    <input type="text" class="form-control" name="display"  placeholder="Enter Display" value="{{$product->display}}" >
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Ram:</label>
                    <input type="text" class="form-control" name="ram"  placeholder="Enter Ram" value="{{$product->ram}}">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Processor:</label>
                    <input type="text" class="form-control" name="processor"  placeholder="Enter Processor" value="{{$product->processor}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Camera:</label>
                    <input type="text" class="form-control" name="camera"  placeholder="Enter Camera" value="{{$product->camera}}">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Battery:</label>
                    <input type="text" class="form-control" name="battery"  placeholder="Enter Battery" value="{{$product->battery}}">
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Warranty:</label>
                    <input type="text" class="form-control" name="warranty"  placeholder="Enter Warranty" value="{{$product->warranty}}">
                </div>
            </div> 
        </div>
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="form-group">
                    <label for="">Price:</label>
                    <input type="text" class="form-control" name="price"  placeholder="Enter Price" value="{{$product->price}}">
                </div>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="{{route('list.phone')}}" class="btn btn-secondary">Back</a>
    </form>
  </div>
</div>

@endsection()