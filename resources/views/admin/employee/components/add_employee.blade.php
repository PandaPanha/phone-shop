@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">
        <a href="http://127.0.0.1:8000/admin/employee" class="btn border-0 active" role="button" aria-pressed="true">Employee-></a>
        <a href="http://127.0.0.1:8000/admin/employee/components"  class="btn border-0 active" role="button" aria-pressed="true">Add / Edit Employee</a>
      </span>
    </div>
  </nav>
  <div class="container-fluid bg-light p-4">
    <form action="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Employee Name:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter PhoneName">
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Storage:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Storage">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">RAM:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Ram">
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Processor:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Processor">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Camera:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Camera">
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Picture:</label><br>
            <input type="file" class="form-control-file border w-100 p-4" id="exampleFormControlFile1">
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Battery:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Battery">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Warranty:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Warranty">
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-4">
            <div class="col-lg-10"></div>
            <div class="col-lg-2 p-3">
                <div class="btn btn-secondary">Cancel</div>
                <div class="btn btn-primary">Submit</div>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection()
