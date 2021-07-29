<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge - Albuns List ::..</title>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
       <div id="menu">
       		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
       		<span><a href="/albuns/new"  class="menuItem">New Album</a></span>
       		<span><a href="/users/logout"  class="menuItem">Logout</a></span>
        </div>
         @if(session()->has('msg'))
    		<div class="alert alert-success">
        		{{ session()->get('msg') }}
    		</div>
		@endif
        <br />
        <ul id="albunsList" class="list-group">
        	@foreach ($albuns as $album)
    			<li class="list-group-item">
    				{{ $album->name }}
        			- <a href="{{ route('formAlbum', ['id' => $album->id]); }}">Edit</a>
        			@if( Session::get('role') == 'admin' )
        				- <a href="{{ route('deleteAlbum', ['id' => $album->id]); }}" onclick="return confirm('Are you sure?')">Delete</a> 
        			@endif
    			</li>
			@endforeach
        </ul>
    </body>
</html>