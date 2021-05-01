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
              <span style="float:left;"><h5 class="m-0">Tutoring</h5></span> 
              <span style="float:right;"> <a href="{{ route('tutoring_session.index') }}">Tutor Schedule</a></span>
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{ route('tutor.store') }}">
                        @csrf

                        <input id="tutor_id" type="hidden" class="" name="tutor_id" value="{{ $users->id }}" >
                                            
                        <div class="form-group row">
                            <label for="course_id" class="col-md-4 col-form-label text-md-right">Course id</label>

                            <div class="col-md-6">
                                <input id="course_id" type="text" class="" name="course_id" value="{{ old('course_id') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="course_name" class="col-md-4 col-form-label text-md-right">Course Name</label>

                            <div class="col-md-6">
                                <input id="course_name" type="text" class="" name="course_name" value="{{ old('course_name') }}" >

                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="" name="phone" value="{{ old('phone') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="faculty" class="col-md-4 col-form-label text-md-right">Faculty</label>

                            <div class="col-md-6">
                                <input id="faculty" type="text" class="" name="faculty" value="{{ old('faculty') }}">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Time</label>

                            <div class="col-md-6">
                                <input id="time" type="text" class="" name="time" value="{{ old('time') }}">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="virtual_meeting" class="col-md-4 col-form-label text-md-right">virtual_meeting</label>

                            <div class="col-md-6">
                                <input id="virtual_meeting" type="text" class="" name="virtual_meeting" value="{{ old('virtual_meeting') }}">

                                
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
            </div>
          
      </div><!-- /.container-fluid -->
    </div>
</section>  


@endsection