@extends('layouts.admin')
@section('content')

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
         
          <li class="breadcrumb-item active">Bus Schedule</li>
        </ol>
      
   
  </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->
    <section class="content">
<div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline" style="background-color: rgba(245, 245, 245, 0.4); ">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Bus Schedule</h5></span> 
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{ route('transportation.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="semester" class="col-md-4 col-form-label text-md-right">Semester</label>
                            <div class="col-md-6">
                                <input id="semester" type="text" class="" name="semester" value="{{ old('semester') }}" >

                                
                            </div>
                            
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="day" class="col-md-4 col-form-label text-md-right">Days</label>

                            <div class="col-md-6">
                                <input id="day" type="text" class="" name="day" value="{{ old('day') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="time" class="col-md-4 col-form-label text-md-right">Time</label>

                            <div class="col-md-6">
                                <input id="time" type="text" class="" name="time" value="{{ old('time') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">Location</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="" name="location" value="{{ old('location') }}" >

                                
                            </div>
                        </div>
                       

                        

                        










                        
                       
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
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