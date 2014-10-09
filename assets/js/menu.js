$(document).ready(function(){
	    var current = window.location.pathname;
	    $('.page-menu li > a').each(function(){
		  if($(this).attr('href').indexOf(current) !==-1){
			$(this).addClass('active');
		  }
	    })
      })