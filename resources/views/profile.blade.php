<!DOCTYPE html>
<html>
<head>
	<title>{{Auth::user()->name}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/project.css')}}">
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div style="background-color: white">
		<a class="nav-link active" href="{{route('main',app()->getLocale())}}"><i style="font-size: 30px;" class="material-icons">home</i></a>
	</div>
	<div style="float: right;" class="profile">
        <div>
        	<img style="height: 30px;" class="rounded-circle" src="{{asset('images/'.Auth::user()->profile)}}">
        	<a id="navbarDropdown" class=" dropdown-toggle" href="#"
               	role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
           		{{ Auth::user()->name }}
       		 </a>

	        <div class="dropdown-menu " aria-labelledby="navbarDropdown">
	            <a class="dropdown-item " href="{{ route('logout',app()->getLocale()) }}"
	    			onclick="event.preventDefault();
	                    document.getElementById('logout-form').submit();">
	                {{ __('Logout') }}
	            </a>

	            <form id="logout-form" action="{{ route('logout',app()->getLocale()) }}" method="POST" class="d-none">
	                @csrf
	            </form>
	        </div>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
    	<div class="col-md-4"></div>
    	<div class="col-md-4" style="background-color: white">
    		<div class="card">
    			<!-- <img class="card-img-top" src="{{asset('images/'.Auth::user()->profile)}}"> -->
    			<div class="card-body">
    				<img style="width: 225px; height:225px;" src="{{asset('images/'.Auth::user()->profile)}}">
    				<h1>{{Auth::user()->name}}</h1>
                    <h5>{{Auth::user()->email}}</h5>
                    <form method="POST" action="{{route('store',app()->getLocale())}}" enctype="multipart/form-data">
    					@csrf
    					<!-- <input type="number" style="display: none" id="id" name="id" value="{{Auth::user()->id}}"> -->
    					<input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
    					<!-- <input  class="btn btn-primary btn-block" value="Update a photo"> -->
                        <button type="submit" id="btn" name="btn" class="btn btn-primary btn-block">
                            {{__('Update a photo')}}
                        </button>
    				</form>
    			</div>
    		</div>
    	</div>
    	<div class="col-md-4"></div>
    	<!-- <div class="col-md-6" style="background-color: white"> -->
    		

    	</div>
    	
    </div>
</body>
</html>