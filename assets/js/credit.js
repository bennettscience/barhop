$('.featured').ready(function(){
	    function extractUrl(input) {
		  return input.replace(/"/g,"").replace(/url\(|\)$/ig, "");
	    };
      
	    //Set a variable to hold the extracted URL      
	    bg = extractUrl($(".featured, .post").css("background-image"));
	    extractPhotoId();
      
	    function extractPhotoId() {
		  photoId = bg.replace(/(.+\.[a-z]{2,4})\/(\d{3,5})\/(\d{7,15})(?:(?!ab).)*/ig, '$3')
	    }
      
	    var apiUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key=c8c95356e465b8d7398ff2847152740e&photo_id=" + photoId + "&format=json&jsoncallback=?";
      
	    $.getJSON(apiUrl, function(data){
	        $("#credits").html('<a href="http://www.flickr.com/photos/'+data.photo.owner.nsid+'/'+data.photo.id+'/" target="blank">'+data.photo.title._content+ ' by ' +data.photo.owner.username+"</a>");
	    });
      })

$("img").each(function() {
		  // Grab the image URL to put through the API call
		  var imgSrc = $(this).attr('src');
		  // If "flickr.com" is in the URL, run the function
		  if (!/flickr\.com$/i.test(imgSrc)) {
			// Get the photo ID from the src
			photoId = imgSrc.replace(/(.+\.[a-z]{2,4})\/(\d{3,5})\/(\d{7,15})(?:(?!ab).)*/ig, '$3');
			//Call the Flicmr API to get the photo info as JSON
			var apiUrl = "https://api.flickr.com/services/rest/?method=flickr.photos.getInfo&api_key=c8c95356e465b8d7398ff2847152740e&photo_id=" + photoId + "&format=json&jsoncallback=?";
			// Put a credit after the image using the JSON data
			var $this = $(this);
			$.getJSON(apiUrl, function(data){
			      $this.after('<a href="http://www.flickr.com/photos/'+data.photo.owner.nsid+'/'+data.photo.id+'/">'+data.photo.title._content+ ' by ' +data.photo.owner.username+'</a>');
			})
		  }
	    })