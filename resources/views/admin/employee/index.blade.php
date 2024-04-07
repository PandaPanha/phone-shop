@extends('layouts.adminLayout')
@section('content')
<div class="d-flex flex-column  gap-4 ">
  <nav class="navbar bg-body-tertiary  ">
    <div class="container-fluid">
      <span class="text-secondary navbar-brand mb-0 h1 rounded-2 ">Employee</span>
    </div>
  </nav>
  <div class="w-25">
    <a href="http://127.0.0.1:8000/admin/employee/components" class="btn btn-success btn-lg w-50 active" role="button" aria-pressed="true">Add Employee</a>
  </div>
  <table class="table table-bordered">
    <tr class="text-center">
      <th scope="row">ID</th>
      <td>Name</td>
      <td>Gender</td>
      <td>Position</td>
      <td>Phone</td>
      <td>Image</td>
      <td>Address</td>
      <td>Action</td>
    </tr>
  </table>
</div>

@endsection()
