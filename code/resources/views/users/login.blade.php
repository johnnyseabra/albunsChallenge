<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge - Login ::..</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    	<div id="menu">
        	<span><a href="/users/new" class="menuItem">Register</a></span>
        	<span><a href="/users/login"  class="menuItem">Login</a></span>
        	@if( Session::has('auth') )
        		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
        	@endif
        	@if(session()->has('err'))
    		<div class="alert alert-danger">
        		{{ session()->get('err') }}
    		</div>
		@endif
        </div>
        <br />
        <div class="form-group">
        	<form action="{{ route('doLogin') }}" method="POST">
        		@csrf
        		<label for="">Username</label><br />
        		<input type="text" name="username" id="username"><br />
        		<label for="">Password</label><br />
        		<input type="password" name="password"><br />
        		<button>Login</button>
        	</form>
        </div>
    </body>

</html>