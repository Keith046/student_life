@extends('layouts.student')

@section('content')
<link rel="stylesheet" href="{{ asset('map/css/style.css') }}">

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/landlord') }}">Home</a></li>
          <li class="breadcrumb-item active">Apartments</li>
        </ol>
      </div>
  <!-- /.container-fluid -->
</div>

<div class="content">
      <div class="container-fluid">
        <br>
             <div class="card card-primary card-outline">
              <div class="card-header">
              <span style="float:left;"><h5 class="m-0">Apartments</h5></span> 
               <span style="float:right;"> <a href="{{url('/student/housing')}}">View Apartments</a></span> 
              
               
              </div>
              <div class="card-body">

                <div class="map" id="map">
                    
                    
                    
                    
                    
                    
                    <!-- <gmap-map
                        :center="mapCenter"
                        :zoom="10"
                        style="width: 100%; height: 440px;">
                       
                    </gmap-map>-->
                </div>
                </div>
            </div>
          
      </div><!-- /.container-fluid -->
    </div>


    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCS-d5dC7YyDDgubxhMAf9178mkADgmnYQ&callback=initMap">
</script>
    <script src="{{ asset('map/js/app.js') }}"></script>


       <!--<script src="{{ mix('js/app.js') }}"></script> -->      
    
@endsection