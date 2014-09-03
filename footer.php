<footer name="footer">
      <footer id="footer-container">
	<div id="footer-content">
	  <p>Powered by <a href="http://www.anchorcms.com">Anchor</a>, <a href="http://jpanelmenu.com">jPanelMenu</a>, and <a href="https://github.com/TSCBennett/barhop">Barhop</a>.</p>
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
      
      $(".post").each(function() {
	    var cs = window.getComputedStyle(this);
	    if (cs.backgroundImage==="none" && cs.backgroundColor==="transparent" || cs.backgroundColor.match("0, 0, 0")) {
		  var color = "hsl("+ ~~(Math.random()*360) +",30%,60%)";
		  $(this).css("background-color", color);   
	    }
	    else { return }
      });
    </script>
  </body>
</html>