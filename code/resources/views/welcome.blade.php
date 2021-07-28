<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge ::..</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="menu">
        	@if( Session::has('auth') )
        		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
        		<span><a href="/albuns/new"  class="menuItem">New Album</a></span>
        		<span><a href="/users/logout"  class="menuItem">Logout</a></span>
        	@else
        		<span><a href="/users/new" class="menuItem">Register</a></span>
        		<span><a href="/users/login"  class="menuItem">Login</a></span>
        	@endif
        </div>
    </body>
</html>