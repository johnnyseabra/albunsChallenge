<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Album Edit</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    </head>
    <body>
    	<form action="{{ route('changeAlbum', ['id' => $album->id]) }}" method="POST">
    		@csrf
    		<label for="">Artist</label>
    		<select name="artist" id="artistDrop">
    		
			</select><br />
    		<label for="">Name</label>
    		<input type="text" name="name" value="{{ $album->name }}"><br />
    		<label for="">Year</label>
    		<input type="number" name="year" value="{{ $album->year }}"><br />
    		<button>Save</button>
    	</form>
    	<script>
    
        	var artists = {!! $artists !!};

        	var $option;
    
        	JSON.parse(JSON.stringify(artists), (key, value) => {
        		 if(key == "name")
        		 {
        			$option = $('<option value="' + value + '">' + value + '</option>');
                 	if( '{{ $album->artist }}' == value ) 
                     	$option.attr('selected', 'selected');

                 	$('#artistDrop').append($option);

             	 }
        		 return void(0);	
    		});
    	</script>
    </body>

</html>