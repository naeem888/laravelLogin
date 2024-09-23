@extends('layouts.master')

@section('content')
 <!-- start page title -->
 <div class="div">
  <h2>Student Details Edit</h2>
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

  <form action="{{url('/client/update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$record->id}}">
  <div class="mb-3">
    <label class="form-label">Student's Name</label>
    <input type="text" name="studentname" value="{{$record->studentname}}" class="form-control" id="fullname"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Student's Father Name</label>
    <input type="text" name="fathername" value="{{$record->fathername}}" class="form-control" id="fullname"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Student's Mother Name</label>
    <input type="text" name="mothername" value="{{$record->mothername}}" class="form-control" id="fullname"  aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" name="email" value="{{$record->email}}" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" name="mobile" value="{{$record->mobile}}"class="form-control" id="mobile"  aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" name="address" value="{{$record->address}}" class="form-control" id="address"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label class="form-label">Image</label>
    <input type="file" name="pic" class="form-control" id="address"  aria-describedby="emailHelp">
    <img src="{{asset('images/'.$record['pic'])}}" class="mt-3" alt="IMG"  height="70px" width="70px">
  </div>




  <button type="submit" class="btn btn-warning mt-3">Update</button>
</form>
  </div>
</div>
@endsection
