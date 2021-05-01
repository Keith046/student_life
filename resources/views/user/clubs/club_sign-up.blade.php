@extends('layouts.student')
@section('content')

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/student') }}">Home</a></li>
          
          <li class="breadcrumb-item active">Sign-up</li>
        </ol>
      
   
  </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->
<section class="content">
<div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Student Clubs</h5></span> 
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{ route('club.store') }}">
                        @csrf

                        
                                            
                       

                            <div class="col-md-6">
                                <input id="faculty" type="text" class="" name="faculty" value="{{ old('faculty') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="club_name" class="col-md-4 col-form-label text-md-right">Club Name</label>

                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="" name="phone" value="{{ old('phone') }}" >

                                
                            </div>
                        </div>
                       
                       
                     
                       
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('sign-up') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div class="card">
  <div class="card-header">
   Clubs
  </div>
  <div class="card-body">
  <table class="table table-bordered table-striped">
  		<tr>    <th>Faculty</th>
  			
  			<th>Club Name</th>
              <th>Phone</th>
      
      
        
    
        
  			<th>Action</th>
  		</tr>
  		@foreach($users as $data)
  			<tr>
              <td>{{ $data->faculty }}</td>
                
                  <td>{{ $data->club_name }}</td>
  			
          <td>{{ $data->phone }}</td>
         
          
          
          <td>{{ $data->time }}</td>
          <td><a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-info">Delete</a>
            <form action="{{ route('club.destroy',$data->id) }}" method="post">
              @method('DELETE')
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form> </td>
  			</tr>
  		@endforeach
  	</table>
  </div>
</div>











                    </div>
            </div>
          
      </div><!-- /.container-fluid -->
    </div>
</section>  


@endsection