
@extends('layouts.student')


@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/student/housing') }}">Apartments</a></li>
          <li class="breadcrumb-item active">Apartment Information</li>
        </ol>
      
   
  </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline" style="background-color: rgba(245, 245, 245, 0.4);">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Apartment Information</h5></span> 
              
              </div>
              <div class="card-body">
              
              <table class="table">
              <tr>
              <tr>
              <img class="" src="{{asset('/storage/images/'.$id->image)}}" alt="apartment_image" style="width: 50%;height: 50%; text-align: center; display: block;
  margin-left: auto;
  margin-right: auto; ">
  
              </tr>
          <th>Apatment Name: </th><td>{{ $id->apartment_name }}</td>
          </tr>
  		<tr>
          <th>Phone: </th><td>{{ $id->phone }}</td>
          </tr>
  		<tr>
          <th>address: </th><td>{{ $id->address }}</td>
          </tr>
          
          <tr>
          <th>City: </th><td>{{ $id->city }}</td>
          <tr>
          <th>Country: </th><td>{{ $id->country }}</td>
          </tr>
          <tr>
          <th>Price: </th><td>{{ $id->price }}</td>
          </tr>
          <tr>
          <th>Status: </th><td>{{ $id->status }}</td>
          </tr>
          </tr>
  	</table>










              </div>
            </div>
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection