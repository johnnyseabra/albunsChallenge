<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge - Add User ::..</title>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="menu">
        	<span><a href="/users/new" class="menuItem">Register</a></span>
        	<span><a href="/users/login"  class="menuItem">Login</a></span>
        	@if( Session::has('auth') )
        		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
        	@endif
        </div>
        @if(session()->has('msg'))
    		<div class="alert alert-success">
        		{{ session()->get('msg') }}
    		</div>
		@endif
        <br />
        <div class="form-group">
        	<form action="{{ route('saveUser') }}" method="POST">
        		@csrf
        		<label for="name">Name</label><br />
        		<input type="text" name="name" id="name" class="form-control w-25"><br />
        		<label for="username">Username</label><br />
        		<input type="text" name="username" id="username" class="form-control w-25"><br />
        		<label for="password">Password</label><br />
        		<input type="password" name="password" id="password" class="form-control w-25"><br />
        		<label for="role">Role</label><br />
        		<select name="role" id="role" class="form-control w-25">
        			<option value="Admin">Admin</option>
        			<option value="User">User</option>
        		</select><br />
        		<button>Save</button><br />
        	</form>
    	</div>
    </body>

</html>