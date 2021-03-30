@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item active">User Management</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
    <section class="content" >

<div class="container-fluid">
  <br>
       <div class="card card-primary card-outline" style="background-color: rgba(245, 245, 245, 0.4); ">
        <div class="card-header">
        <span style="float:left;"><h5 class="m-0">User Management</h5></span> 

         <span style="float:right;"> <a href="{{ route('accounts.create') }}">Add Account&nbsp;&nbsp;</a></span>  
        
    <span style="float:right;"> <form class="form-inline ml-3" type="get" action="{{ url('/admin/sort') }}">
      <div class="input-group input-group-sm">
        <label for="sort">Status:</label>&nbsp;&nbsp;
<select id="sort" name="query">
<option value="">All</option>
  <option value="5">Student</option>
  <option value="4">Administrator</option>
  <option value="6">Landlord</option>
  <option value="8">Vendor</option>
</select> &nbsp; 
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form></span>&nbsp;&nbsp;&nbsp;<br><br></div>
        <div class="card-body">
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
        <th>E-Mail</th>
        <th>Role</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
  				<td>{{ $data->id }}</td>
  				<td>{{ $data->name }}</td>
          <td>{{ $data->email }}</td>
          <td>{{ $data->description }}</td>
  				<td>

          
            <a href="{{ route('accounts.edit',$data->id) }}" class="btn btn-info">Edit</a> 
            <a href="" class="btn btn-success">Change Password</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('accounts.destroy',$data->id) }}" method="post">
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