<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>New Album</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    </head>
    <body>
    	<form action="{{ route('saveAlbum') }}" method="POST">
    		@csrf
    		<label for="">Artist</label>
    		<select name="artist" id="artistDrop">
    			
			</select><br />
    		<label for="">Name</label>
    		<input type="text" name="name"><br />
    		<label for="">Year</label>
    		<input type="number" name="year"><br />
    		<button>Salvar</button>
    	</form>
    	 <script>
    
        	var artists = {!! $artists !!};
    
        	JSON.parse(JSON.stringify(artists), (key, value) => {
        		 if(key == "name")
        		 {
                 	$('#artistDrop').append('<option value="' + value + '">' + value + '</option>');
        		 }
        		 return void(0);	
    		});
    	</script>
    	
    </body>

</html>