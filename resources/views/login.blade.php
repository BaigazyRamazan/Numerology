<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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
	<div class="loginPHP">
        <div class="popOut-content">
            <h5>{{__('Log In')}}</h5>
            <br>
            <div class="popOut-form">
	            <form method="POST" action="{{ route('login',app()->getLocale()) }}">
	            	@csrf
	                <!-- <input class="form-control form-control-user @error('name') is-invalid @enderror" type="text" id="name" name="name" placeholder="Your name" required='true'>
	                @error('name')
	                <span class="invalid-feedback" role="alert">
	                	<strong>{{ $message }}</strong>
	                </span>
	                @enderror -->

	                <input type="email" id="email" name="email" placeholder="Your email" required class="form-control form-control-user @error('email') is-invalid @enderror">
	                @error('email')
	                <span class="invalid-feedback" role="alert">
	                	<strong>{{ $message }}</strong>
	                </span>
	                @enderror

	                <input type="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" placeholder="Password" required>
	                @error('password')
	                <span class="invalid-feedback" role="alert">
	                	<strong>{{ $message }}</strong>
	                </span>
	                @enderror

	                <button type="submit" class="btn btn-primary btn-user btn-block">
	                	{{ __('Login')}}
	                </button>
	                <br>

	                <br>
	                <div>{{__('Do you want to create a new account?')}} 
	                	<a href="{{route('register',app()->getLocale())}}">{{__('Sign Up')}}</a></div>
	            </form>
            </div>

        </div>
    </div>
</body>
</html>