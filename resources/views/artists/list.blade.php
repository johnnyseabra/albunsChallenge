<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge - Artists List ::..</title>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    	<div id="menu">
       		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
       		<span><a href="/albuns/new"  class="menuItem">New Album</a></span>
       		<span><a href="/users/logout"  class="menuItem">Logout</a></span>
        </div>
        <br />
        <ul id="artistList" class="list-group">
        	@foreach ($artists as $artist)
        		<li class="list-group-item"><a href="{{ route('listByArtist', ['artistName' => $artist[0]->name ]) }}">{{ $artist[0]->name; }}</a></li>
        	@endforeach
        </ul>
    </body>
</html>