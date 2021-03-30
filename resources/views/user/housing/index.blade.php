@extends('layouts.student')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          
          <li class="breadcrumb-item active">Apartments</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">

      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Apartments for Rent</h5></span> 
              <span style="float:right;"> |<a href="{{url('/student/housing/maps')}}">&nbsp;&nbsp;&nbsp;View Map </a></span>
             <span style="float:right;"> <form class="form-inline ml-3" type="get" action="{{ url('/student/sort') }}">
      <div class="input-group input-group-sm">
        <label for="sortstatus">Status:</label>&nbsp;&nbsp;
<select id="sort" name="query">
<option value=""></option>
  <option value="Available">Available</option>
  <option value="Rented">Rented</option>
 
</select> &nbsp;
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form></span>&nbsp;&nbsp;&nbsp;
    




              
              </div>
              <div class="card-body">
  
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Status</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
  				<td>{{ $data->landlord_id }}</td>
  				<td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->phone }}</td>
          <td>{{ $data->address }}</td>
          <td>{{ $data->status }}</td>
  				<td>

          <a href="{{ route('apartments.show',$data->id) }}" class="btn btn-info">more info</a> 
         <a href="{{ route('appointments.index') }}" class="btn btn-warning">Create Appointment</a>
            
            
            
            
          </td>
  			</tr>
  		@endforeach
  	</table>
  
    </div>
            </div>
          
      </div>
</section>	
	


@endsection