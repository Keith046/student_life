@extends('layouts.landlord')
@section('content')

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/landlord') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/apartments') }}">Rental Management</a></li>
          <li class="breadcrumb-item active">Add Apartment</li>
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
              <span style="float:left;"><h5 class="m-0">New Apartment</h5></span> 
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{ route('apartments.store') }}">
                        @csrf

                        <input id="landlord_id" type="hidden" class="" name="landlord_id" value="{{ $users->id }}" >
                        <input id="latitude" type="hidden" class="" name="latitude" value="{{ old('latitude') }}" >
                        <input id="longitude" type="hidden" class="" name="longitude" value="{{ old('longitude') }}" >                      
                        <div class="form-group row">
                            <label for="apartment_name" class="col-md-4 col-form-label text-md-right">Apartment Name</label>

                            <div class="col-md-6">
                                <input id="apartment_name" type="text" class="" name="apartment_name" value="{{ old('apartment_name') }}" >

                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="" name="phone" value="{{ old('phone') }}" >

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="" name="address" value="{{ old('address') }}">

                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="" name="price" value="{{ old('price') }}">

                                
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Apartment picture') }}</label>
                            <div class="col-md-6">
                                    <div class="card card-outline">                                       
                                        <div class="card-body">
                                        <input type="file" name="image">
                                      <!--   <input type="submit" value="Upload">-->
                                        </div>
                                    </div>
                            </div>
                         </div>
                        
                        <div class="form-group row">
                      
                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                        <div class="col-md-6">
                        <div class="card card-outline">                                       
                                        <div class="card-body">
                        <input type="radio" id="Available" name="status" value="Available">
<label for="Available"class="">{{ __('Available') }}</label>

                            <input type="radio" id="Rented" name="status" value="Rented">
<label for="Rented"class="">{{ __('Rented') }}</label>
                            
                            
                            </div>
                                    </div>
                            </div>
                         </div>
                       
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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