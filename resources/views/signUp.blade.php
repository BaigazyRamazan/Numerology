<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href="{{asset('/css/project.css')}}">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="signUpPHP">
        <div class="popOut-content">
            <i class="fa fa-close closeTags" onclick="closePopOutSignUp()"></i>
            <h5>{{__('Create Account')}}</h5> 
            <br>
            <div class="popOut-form">
                <form method="POST" action="{{ route('register',app()->getLocale()) }}">
                    @csrf
                    <input id="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">

                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        {{ __('Register') }}
                    </button>
                    <br>
                    <div class="switch">{{__('Do you already have account?')}} 
                        <a href="{{route('login',app()->getLocale())}}">{{__('Log In')}}</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</body>
</html>