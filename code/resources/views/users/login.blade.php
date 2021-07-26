<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Login</title>
    </head>
    <body>
    	<form action="{{ route('doLogin') }}" method="POST">
    		@csrf
    		<label for="">Username</label>
    		<input type="text" name="username"><br />
    		<label for="">Password</label>
    		<input type="password" name="password"><br />
    		<button>Login</button>
    	</form>
    </body>

</html>