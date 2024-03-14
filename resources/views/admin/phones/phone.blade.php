@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Phone</span>
    </div>
  </nav>
  <div class="input-group mb-3 shadow-sm ">
    <button 
      style="background-color: #F4F4F4"
      class="btn p-2 shadow-sm text-secondary fw-semibold  " 
      data-bs-toggle="modal" data-bs-target="#exampleModal"
      type="button" id="button-addon1">
      + Add Phone
    </button>
    <input type="text" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
  </div>
  <table class="table table-bordered">
    <tr class="text-center">
      <th scope="row">ID</th>
      <td>Name</td>
      <td>Price & Discount Price</td>
      <td>Image</td>
      <td>Action</td>
    </tr>
    
  </table>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>

@endsection()