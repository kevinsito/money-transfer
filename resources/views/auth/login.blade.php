@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="formCL">Login</h1> 
            <div class="content">

                <!-- Form used for the login flow of the application -->
                <form method="POST" action="{{ url('/login') }}">

                    <!-- Necessary CSRF Token generation -->
                    {{ csrf_field() }}

                    <!-- Each input is prefixed with the group containing an error or not -->
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} formRW">
                        <label class="formCL">E-Mail Address</label>

                        <!-- The value 'old()' allows the value to persist if results in error -->
                        <input id="email" type="email" class="form-control formCL" name="email" value="{{ old('email') }}">

                        <!-- Display the errors -->
                        @if ($errors->has('email'))
                            <span class="help-block formCL">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} formRW">
                        <label class="formCL">Password</label>
                        <input id="password" type="password" class="form-control formCL" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block formCL">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group formRW">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label class="formCL">
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group formRW">
                        <button type="submit" class="btn btn-primary">
                            <i></i> Login
                        </button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
@endsection
