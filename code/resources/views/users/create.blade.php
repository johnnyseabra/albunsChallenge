<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Add User</title>
    </head>
    <body>
    	<form action="{{ route('saveUser') }}" method="POST">
    		@csrf
    		<label for="">Name</label>
    		<input type="text" name="name"><br />
    		<label for="">Username</label>
    		<input type="text" name="username"><br />
    		<label for="">Password</label>
    		<input type="password" name="password"><br />
    		<label for="">Role</label>
    		<select name="role">
    			<option value="Admin">Admin</option>
    			<option value="User">User</option>
    		</select><br />
    		<button>Save</button>
    	</form>
    </body>

</html>