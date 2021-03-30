@extends('layouts.admin')
@section('content')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit User</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ url('/accounts') }}">User Management</a></li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    <!-- /.content-header -->
<section class="content">
  <div class="container-fluid">
  <form method="POST" action="{{route('accounts.update', $user->id )}}">
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

                       <!-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password', $user->password)}}" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->
                        <div class="form-group row">
                        <fieldset id="status">
                        <legend>User Status</legend>
                        <div class="col-md-6">
                        <input type="radio" id="admin" name="role" value="4">
<label for="admin"class="col-md-4 col-form-label text-md-right">{{ __('Administrator') }}</label><br>

                            <input type="radio" id="student" name="role" value="5">
<label for="student"class="col-md-4 col-form-label text-md-right">{{ __('Student') }}</label><br>
<input type="radio" id="landlord" name="role" value="6">
<label for="landlord"class="col-md-4 col-form-label text-md-right">{{ __('Landlord') }}</label><br>
<input type="radio" id="vendors" name="role" value="8">
<label for="vendors"class="col-md-4 col-form-label text-md-right">{{ __('Vendor') }}</label>
                            </div>
                            </fieldset>
                        </div> 
                       
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>        

    
</section>  


@endsection