@extends('layouts.landlord')
@section('content')


  <div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/landlord') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/profile') }}">Profile</a></li>
          <li class="breadcrumb-item active">Edit Profile</li>
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
              <span style="float:left;"><h5 class="m-0">Profile</h5></span> 
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{route('profile.update', $user->id )}}">
  @csrf
    <input type="hidden" name="_method" value="PATCH" />

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name', $user->name)}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email', $user->email)}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password', $user->password)}}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row"> 
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile picture') }}</label>
                            <div class="col-md-6">
                                    <div class="card card-outline">                                       
                                        <div class="card-body">
                                        <input type="file" name="image">
                                      <!--   <input type="submit" value="Upload">-->
                                        </div>
                                    </div>
                            </div>
                         </div>
                       
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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