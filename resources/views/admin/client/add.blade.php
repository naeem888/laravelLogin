@extends('layouts.master')

@section('content')
 <!-- start page title -->
 <div class="div">
  <h2>Student Detail Form</h2>
 </div>
 <div class="card" style="width: 38rem;">
  <div class="card-body">

  @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

@if(session()->has('error'))
    <div class="alert alert-error">
        {{ session()->get('error') }}
    </div>
@endif

  <form action="{{url('/client/submit')}}" method="POST" enctype="multipart/form-data">
@csrf
  <div class="mb-3">
    <label class="form-label">Student's Name</label>
    <input type="text" name="studentname" class="form-control" id="fullname" placeholder="Enter student's fulll name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Student's Father Name</label>
    <input type="text" name="fathername" class="form-control" id="fullname" placeholder="Enter father's name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Student's Mother Name</label>
    <input type="text" name="mothername" class="form-control" id="fullname" placeholder="Enter mother's name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email Address" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="pic" class="form-control" id="address" placeholder="Enter Address" aria-describedby="emailHelp">
  </div>




  <button type="submit" class="btn btn-warning mt-3">Submit</button>
</form>
  </div>
</div>
@endsection
