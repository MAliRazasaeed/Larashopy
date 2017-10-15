@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- Login Form --}}
                            <form id="login-form" method="POST" role="form" style="display: block;" action="{{ route('login') }}">
                                 {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required autofocus> @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required> @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group text-center">

                                    <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-register" value="Log In">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        Forgot Your Password?
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                             {{-- End Login Form --}}

                            {{-- Register Form --}}
                            <form id="register-form" class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" style="display: none;">
                                {{ csrf_field() }}
                              
                                    <div class="col-md-12">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus> @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email Address" required> @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required> @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                           
                            {{-- Register form --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection