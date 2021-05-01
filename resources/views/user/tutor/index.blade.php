@extends('layouts.student')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          
          <li class="breadcrumb-item active">Tutoring</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">

      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Courses</h5></span> 
              
             <span style="float:right;"> <form class="form-inline ml-3" type="get" action="">
      <div class="input-group input-group-sm">
        <label for="sortstatus">Faculty:</label>&nbsp;&nbsp;
<select id="sort" name="query">
<option value=""></option>
  <option value="IT">Information Technology</option>
  <option value="math">Math</option>
 
 
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
        <th>Course</th>
        <th>Faculty</th>
        <th>Time</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
  				<td>{{ $data->tutor_id }}</td>
  				<td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->phone }}</td>
          <td>{{ $data->course_name }}</td>
          <td>{{ $data->faculty }}</td>
          <td>{{ $data->time }}</td>
          <td><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-info">register</a>
            <form action="{{ route('tutoring_session.store') }}" method="post">
            <input id="id" type="hidden" class="" name="id" value="{{ $data->id }}" >
            <input id="tutor_id" type="hidden" class="" name="tutor_id" value="{{$data->tutor_id}}" >
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form> </td>
  			</tr>
  		@endforeach
  	</table>
  
    </div>
            </div>
          
      </div>
</section>	
	


@endsection