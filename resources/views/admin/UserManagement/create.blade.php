@extends('layouts.admin')
@section('content')

<div class="content-header">
     <div class="container-fluid">
   
     
      
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/accounts') }}">User Management</a></li>
          <li class="breadcrumb-item active">Add User</li>
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
              <span style="float:left;"><h5 class="m-0">New User</h5></span> 
                
              </div>
              <div class="card-body">
  <form method="POST" action="{{ route('accounts.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                      
                      <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>
                      <div class="col-md-6">
                      <div class="card card-outline">                                       
                                      <div class="card-body">
                                      <input type="radio" id="admin" name="role" value="4">
<label for="admin"class="col-md-4 col-form-label text-md-right">{{ __('Administrator') }}</label><br>

                            <input type="radio" id="student" name="role" value="5">
<label for="student"class="col-md-4 col-form-label text-md-right">{{ __('Student') }}</label><br>
<input type="radio" id="landlord" name="role" value="6">
<label for="landlord"class="col-md-4 col-form-label text-md-right">{{ __('Landlord') }}</label><br>
<input type="radio" id="vendors" name="role" value="8">
<label for="vendors"class="col-md-4 col-form-label text-md-right">{{ __('Vendor') }}</label>
                          
                          
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