    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script type="text/javascript">
      // removes the CSS formatting for the featured image background URL
      function extractUrl(input) {
        return input.replace(/"/g,"").replace(/url\(|\)$/ig, "");
      };
      
      //Set a variable to hold the extracted URL
      bg = extractUrl($(".featured").css("background-image"))
      extractPhotoId();
      
      function extractPhotoId() {
        photoId = bg.replace(/(.+\.[a-z]{2,4})\/(\d{3,5})\/(\d{7,15})(?:(?!ab).)*/ig, '$3');
      }
      console.log(bg);
      console.log(photoId);
      
      var apiUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key=c8c95356e465b8d7398ff2847152740e&photo_id=" + photoId + "&format=json&jsoncallback=?";
      console.log(apiUrl);
      
      $.getJSON(apiUrl, function(data){
          $("#credits").html('<a href="http://www.flickr.com/photos/'+data.photo.owner.nsid+'/'+data.photo.id+'/" target="blank">'+data.photo.title._content+"</a>");
      });
      
      $('.featured, .post').each(function() {
	    var cs = window.getComputedStyle(this);
	    if (cs.backgroundImage==="none" && cs.backgroundColor==="transparent" || cs.backgroundColor.match("0, 0, 0")) {
		  postID = $(this).attr('id');
		  
		  colorID = (postID % 25) + 1
		  base3ColorID = colorID.toString(3)
		  colorChoice = ("000").substring(base3ColorID.length) + base3ColorID
		  red = 65 + 70*(parseInt(colorChoice.charAt(0)))
		  green = 65 + 70*(parseInt(colorChoice.charAt(1)))
		  blue = 65 + 70*(parseInt(colorChoice.charAt(2)))
      
		  $(this).css('background-color', "rgb("+red+","+green+","+blue+")") 
	    }
	    else { return }
      });
      
    </script>
  </body>
</html>