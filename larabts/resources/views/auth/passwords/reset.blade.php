@extends('layouts.admin')

@section('content')
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">Reset Pass Admin </h1>
                    </header>
                    <div class="auth-content">
                        <p class="text-muted text-xs-center"><small>Enter your email address to recover your password.</small></p>
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form id="reset-form" action="{{ route('password.request') }}" method="POST" novalidate="" >
                        {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
                                <label for="email">Email</label> 
                                <input type="email" class="form-control underlined" name="email" id="email" placeholder="Your email address" value="{{ $email or old('email') }}" required autofocus>
                                 @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm">Confirm Password</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                            
                            </div>


                            <div class="form-group"> 
                                <button type="submit" class="btn btn-block btn-primary">Reset Password</button> </div>
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
@endsection
