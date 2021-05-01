@extends('layouts.landlord')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/landlord') }}">Home</a></li>
          <li class="breadcrumb-item active">Rental Management</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">

      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Rental Management</h5></span> 
               <span style="float:right;"> <a href="{{url('/landlord/maps')}}">&nbsp;&nbsp;View Map </a></span>
               <span style="float:right;"> <a href="{{ route('apartments.create') }}">Add Apartment&nbsp;&nbsp;</a>|</span>  
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
            <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger">Delete</a>
            <form action="{{ route('apartments.destroy',$data->id) }}" method="post">
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