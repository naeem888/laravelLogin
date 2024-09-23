@extends('layouts.master')

@section('content')
 <!-- start page title -->
 <div class="div">
  <h2>Student Data View</h2>
 </div>
 <div class="card" style="width: 88rem;">
  

 <table class="table table-success table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Student Name</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($all as $row )
    
   
    <tr>
      <th scope="row">{{$row['id']}}</th>
      <td>{{$row['studentname']}}</td>
      <td>{{$row['fathername']}}</td>
      <td>{{$row['mothername']}}</td>
      <td>{{$row['email']}}</td>
      <td>{{$row['mobile']}}</td>
      <td>{{$row['address']}}</td>
      
      <td>
      <img src="{{ asset('images/'.$row['pic']) }}" alt="IMG"  height="70px" width="70px">
      </td>

      <td>
      <a class="btn btn-success btn-sm" href="{{ url('/edit/client',$row->id) }}">Edit</a>
      <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')" href="{{ url('/delete',$row->id) }}">Delete</a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



</form>
  </div>
</div>
@endsection
