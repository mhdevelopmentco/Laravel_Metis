@extends('layouts.app')

@section('content')

        <div class="loginForm">
            <button type="submit" class="register" onclick="window.location.href='{{ url('/register') }}';">REGISTER NOW</button>
            <button type="submit" class="submit" onclick="window.location.href='{{ url('/login') }}';">LOGIN</button>
        </div>
<?php /* ?>
 <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> Login
                                    </button>

                                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <div class="loginForm">
                <div class="inputCover">
                    <!-- <div class="termCover">
                        <input value="1" name="username" id="username" type="checkbox">
                        <label for="username"></label>
                    </div> -->
                    <input type="text" class="input1" placeholder="Username">
                </div>
                <div class="inputCover">
                    <!-- <div class="termCover">
                        <input value="1" name="password" id="password" type="checkbox">
                        <label for="password"></label>
                    </div> -->
                    <input type="text" class="input1" placeholder="Password">
                </div>
                <a href="#" class="forgot">Forgot your password?</a>
                <button type="submit" class="submit">LOGIN</button>
            </div>
 <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                        Your Application's Landing Page.
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php */ ?>
@endsection
