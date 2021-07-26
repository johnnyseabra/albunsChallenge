<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Album</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	
    </head>
    <body>
        <ul id="artistList">
        	
        	
        </ul>
        
        <script>
    
     
        	var artists = {!! $artists !!};
    
        	JSON.parse(JSON.stringify(artists), (key, value) => {
        		 if(key == "name")
        		 {
                 	$('#artistList').append('<li value="' + value + '">' + value + '</li>');
        		 }
        		 return void(0);	
    		});
    	</script>
    
    </body>
</html>