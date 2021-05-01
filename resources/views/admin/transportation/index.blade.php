@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
   
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          
          <li class="breadcrumb-item "><a href="{{ url('/transportation') }}">Transportation</a></li>
          <li class="breadcrumb-item active">Bus schedule</li>
        </ol>
     
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">

      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Bus schedule</h5></span> 
              
             
      
       
      </div>
   
    




              
              </div>
              <div class="card-body">
  
              <table class="table table-bordered table-striped">
  		<tr>    <th>Semester</th>
  			
  			<th>Days</th>
              <th>Time</th>
        <th>Location</th>
      
        
    
     
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
              <td>{{ $data->semester }}</td>
                
                  <td>{{ $data->day }}</td>
  				<td>{{ $data->time }}</td>
          <td>{{ $data->location }}</td>
         
          
          
         
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