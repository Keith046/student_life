@extends('layouts.student')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          
          <li class="breadcrumb-item "><a href="{{ url('/tutor') }}">Tutoring</a></li>
          <li class="breadcrumb-item active">Tutor Schedule</li>
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
  		<tr>    <th>Faculty</th>
  			
  			<th>Course Name</th>
              <th>Student Name</th>
        <th>E-Mail</th>
      
        
    
        <th>Time</th>
        <th>Virtual Meeting</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
              <td>{{ $data->faculty }}</td>
                
                  <td>{{ $data->course_name }}</td>
  				<td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
         
          
          
          <td>{{ $data->time }}</td>
          <td>{{ $data->virtual_meeting}}</td>
          <td><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-info">Delete</a>
            <form action="{{ route('tutoring_session.destroy',$data->id) }}" method="post">
              @method('DELETE')
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