<footer name="footer">
      <footer id="footer-container">
	<div id="footer-content">
	  <p>Powered by <a href="http://www.anchorcms.com">Anchor</a>, <a href="http://jpanelmenu.com">jPanelMenu</a>, and <a href="https://github.com/TSCBennett/barhop">Barhop</a>.</p>
	    <ul>
		  <?php if(user_authed()) : ?>
		  <li><a href="<?php echo base_url('/admin'); ?>">Admin</a></li>
		  <?php endif; ?>
		  <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
		  <?php if(site_meta('twitter_account')) : ?>
		  <li><a href="<?php echo site_meta('twitter_url'); ?>" title="Twitter">Twitter</a></li>
		  <?php endif; ?>
	    </ul>
	</div>
      </div>
</footer>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?php echo theme_url('assets/js/jpanel.min.js'); ?>" type="text/javascript"></script>
    
    <script type="text/javascript">
      $(document).ready(function() {        
	    var JPM = $.jPanelMenu();
	    JPM.on();
      });
     
    //Random color for posts on posts page
      $(".post").each(function() {
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
        
    //Random color for posts on article page
    $(".featured").each(function() {
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
	    else {  return  }
      });
      
    </script>
  </body>
</html>