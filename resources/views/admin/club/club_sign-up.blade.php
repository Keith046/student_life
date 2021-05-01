@extends('layouts.admin')
@section('content')

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          
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
  <form method="POST" action="{{ route('clubs.store') }}">
                        @csrf                   
                                            
                        <div class="form-group row">
                            
                        <label for="faculty" class="col-md-4 col-form-label text-md-right">Faculty</label>
                                <div class="col-md-6">
                                <input id="faculty" type="text" class="" name="faculty" value="{{ old('faculty') }}" >

                                
                            </div>
                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="club_name" class="col-md-4 col-form-label text-md-right">Club Name</label>
                            <div class="col-md-6">
                                <input id="club_name" type="text" class="" name="club_name" value="{{ old('club_name') }}" >

                                
                            </div>
                            
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

                    </div>
          
      </div><!-- /.container-fluid -->
    </div>
</section>  
</div>

@endsection