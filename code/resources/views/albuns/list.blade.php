<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Artist Albuns</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	<link rel="stylesheet" href="{{ asset('css/all.css') }}">
    	
    </head>
    <body>
        <ul id="albunsList">
        	@foreach ($albuns as $album)
    			<li>{{ $album->name }}
    			- <a href="{{ route('formAlbum', ['id' => $album->id]); }}">Edit</a>
    			@if( $request->session()->get('role') == 'admin')
    			- <a href="{{ route('deleteAlbum', ['id' => $album->id]); }}">Delete</a> 
    			@endif
    			</li>
			@endforeach
        </ul>
             
   
    </body>
</html>