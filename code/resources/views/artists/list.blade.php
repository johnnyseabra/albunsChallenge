<!DOCTYPE html>
<html>
    <head>
    	<meta charset="UTF-8">
    	<title>Artists</title>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
    	
    </head>
    <body>
        <ul id="artistList">
        	
        	
        </ul>
        
        <script>
    
        $(document).ready(function () {
        	var artists = {!! $artists !!};
    
        	JSON.parse(JSON.stringify(artists), (key, value) => {
        		 if(key == "name")
        		 {
					var url = '{{ route("listByArtist", ["artistName" => ":name"]) }}';
					url = url.replace(':name', value);
                  	$('#artistList').append('<li value="' + value + '"><a href="' + url + '">' + value + '</a></li>');
        		 }
        		 return void(0);	
    		});

        });
    		
    	</script>
    
    </body>
</html>