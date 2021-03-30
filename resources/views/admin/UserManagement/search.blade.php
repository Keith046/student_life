@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">User Management</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">User Management</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  	<p>
  		<a href="{{ route('accounts.create') }}" class="btn btn-primary">Add New User</a>
  	</p>
  	<table class="table table-bordered table-striped">
  		<tr>
  			<th>ID</th>
  			<th>name</th>
  			<th>Action</th>
  		</tr>
  		@foreach($users as $c)
  			<tr>
  				<td>{{ $c->id }}</td>
  				<td>{{ $c->name }}</td>
  				<td>
            <a href="{{ route('accounts.edit',$c->id) }}" class="btn btn-info">Edit</a> 
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('accounts.destroy',$c->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
  			</tr>
  		@endforeach
  	</table>
  </div>
</section>	
	


@endsection