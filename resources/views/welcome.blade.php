@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::guest())
        <div>
            Welcome to Kevin Sito's Money Transfer service!
            <div>

                <!-- Login flow -->
                Please <a href="{{ url('/login') }}">Login</a> or 

                <!-- Registration flow -->
                <a href="{{ url('/register') }}">Register</a>.
            </div>
        </div>
    @else

        <!-- Display the current user's profile information -->
        <div>Hello {{ Auth::user()->name }} {{ Auth::user()->lName }}. </div>
        <div>Your current email address is {{ Auth::user()->email }}. </div>
        <div>
            <a href="/users">View Users</a>
        </div>
        <div>
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    @endif
</div>
@stop
