
@extends('layouts.landlord')


@section('content')
     <!-- Content Header (Page header) -->
     <div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/landlord') }}">Home</a></li>
          <li class="breadcrumb-item active">Profile</li>
        </ol>
      
   
  </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Profile</h5></span> 
               <span style="float:right;"> <a href="{{ route('profile.edit',$users->id) }}">Edit profile</a></span> 
              </div>
              <div class="card-body">
              
              <table class="table table-bordered table-striped">
              <tr>
              <img class="" src="{{asset('/storage/images/'.$users->image)}}" alt="user_image" style="width: 10%;height: 10%; text-align: center; display: block;
  margin-left: auto;
  margin-right: auto; ">
  
              </tr>
  		<tr>
          <th>Name: </th><td>{{ $users->name }}</td>
          </tr>
  		<tr>
          <th>Email: </th><td>{{ $users->email }}</td>
          </tr>
          
  	</table>










              </div>
            </div>
          
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection