@extends('layouts.admin')

@section('content')
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title"> Admin Panel </h1>
                    </header>
                    <div class="auth-content">
                        <form id="login-form" action="{{ route('login') }}" method="POST" novalidate="">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
                                <label for="email">Email</label> 
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Masukkan Email Anda" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                            </div>
                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}"> 
                                <label for="password">Password</label> 
                                <input type="password" class="form-control underlined" name="password" id="password" placeholder="Masukkan Password Anda" required autofocus>
                                 @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group"> 
                                <label for="remember">
                                    <input class="checkbox" id="remember" type="checkbox" name="remember"  {{ old('remember') ? 'checked' : '' }}> 
                                    <span>Remember me</span>
                                </label> 
                                <a href="{{ route('password.request') }}" class="forgot-btn pull-right">Forgot password?</a> 
                            </div>
                            <div class="form-group"> 
                                <button type="submit" class="btn btn-block btn-primary">Login</button> 
                            </div>
                            <div class="form-group">
                                <p class="text-muted text-xs-center">Do not have an account? <a href="{{ route('register') }}">Sign Up!</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-xs-center"> 
                    <a href="{{ url('/') }}" class="btn btn-secondary rounded btn-sm">
                        <i class="fa fa-arrow-left"></i> Back to homepage
                    </a>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="js/vendor.js"></script>
        <script src="js/app.js"></script>
@endsection
