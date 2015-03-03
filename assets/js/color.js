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