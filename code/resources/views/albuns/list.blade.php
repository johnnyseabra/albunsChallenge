<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Artist Albuns</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	
    </head>
    <body>
        <ul id="albunsList">
        	@foreach ($albuns as $album)
    			<li><a href="{{ route('formAlbum', ['id' => $album->id]); }}">{{ $album->name }}</a></li>
			@endforeach
        </ul>
        
        
   
    </body>
</html>