<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>..:: Albuns Challenge - New Album ::..</title>
    	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    	<div id="menu">
       		<span><a href="/artists/list"  class="menuItem">Artist List</a></span>
       		<span><a href="/albuns/new"  class="menuItem">New Album</a></span>
        </div>
         @if(session()->has('msg'))
    		<div class="alert alert-success">
        		{{ session()->get('msg') }}
    		</div>
		@endif
		<br />
		<div class="form-group">
        	<form action="{{ route('saveAlbum') }}" method="POST">
        		@csrf
        		<label for="artist">Artist</label><br />
        		<select id="artist" class="form-control w-25" name="artist">
            		@foreach ($artists as $artist)
                		<option value="{{ $artist[0]->name; }}">{{ $artist[0]->name; }}</option>
                	@endforeach
    			</select><br />
        		<label for="name">Name</label><br />
        		<input type="text" class="form-control w-25" name="name" id="name"><br />
        		<label for="year">Year</label><br />
        		<input type="number" class="form-control w-25" name="year" id="year"><br />
        		<button>Save</button>
        	</form>
    	 
    	</div>
    </body>

</html>