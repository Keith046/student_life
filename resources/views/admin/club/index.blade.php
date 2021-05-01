@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          
          <li class="breadcrumb-item active">Student Clubs</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">

      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Student Clubs</h5></span> 
              
             <span style="float:right;"> <form class="form-inline ml-3" type="get" action="">
      <div class="input-group input-group-sm">
        <label for="sortstatus">Faculty:</label>&nbsp;&nbsp;
<select id="sort" name="query">
<option value=""></option>
  <option value="BINT">BINT</option>
 
 
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
  			
  			
        <th>Faculty</th>
        <th>Club Name</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
  			<td>{{ $data->faculty }}</td>
          <td>{{ $data->club_name }}</td>
          
         
          <td> <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-info">Delete</a>
            <form action="{{ route('clubs.destroy',$data->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form> 
          </td>
  			</tr>
  		@endforeach
  	</table>
  
    </div>
            </div>
          
      </div>
</section>	
	


@endsection