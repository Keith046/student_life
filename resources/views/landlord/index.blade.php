@extends('layouts.landlord')

@section('content')
   
                <div class="w-full p-6">
                    <p class="text-gray-700">
                        You are logged in as a landlord!
                    </p>
                </div>
            <div>
            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="nav-icon fa fa-circle-o text-danger"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

        </div>
    
@endsection