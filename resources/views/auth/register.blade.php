@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="formCL">Register</h1>
            <div class="content">

            <!-- Form used for the registration flow of the application -->
            <form method="POST" action="{{ url('/register') }}">
                <!-- Necessary CSRF Token generation -->
                {{ csrf_field() }}

                <!-- Each input is prefixed with the group containing an error or not -->
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} formRW">
                    <label class="formCL">First Name</label>

                    <!-- The value 'old()' allows the value to persist if results in error -->
                    <input id="name" type="text" class="form-control formCL" name="name" value="{{ old('name') }}">

                    <!-- Display the errors -->
                    @if ($errors->has('name'))
                        <span class="help-block formCL">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('lName') ? ' has-error' : '' }} formRW">
                    <label class="formCL">Last Name</label>
                    <input id="lName" type="text" class="form-control formCL" name="lName" value="{{ old('lName') }}">

                    @if ($errors->has('lName'))
                        <span class="help-block formCL">
                            <strong>{{ $errors->first('lName') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} formRW">
                    <label class="formCL">E-Mail Address</label>
                    <input id="email" type="email" class="form-control formCL" name="email" value="{{ old('email') }}">

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

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} formRW">
                    <label class="formCL">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control formCL" name="password_confirmation">

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block formCL">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group formRW">
                    <button type="submit" class="btn btn-primary">
                        <i class=""></i> Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
