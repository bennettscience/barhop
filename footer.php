<footer name="footer">
      <footer id="footer-container">
	<div id="footer-content">
	  <p>Powered by <a href="http://www.anchorcms.com">Anchor</a>, <a href="http://jpanelmenu.com">jPanelMenu</a>, and <a href="https://github.com/TSCBennett/barhop">Barhop</a>.</p>
	</div>
      </div>
</footer>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            var div = $(".featured"),
                limit = 450;
            $(window).on('scroll', function() {
                var st = $(this).scrollTop();
                if (st <= limit) {
                    div.css({'opacity' : (1 - st/limit) });
                }
            })
        });
    </script>
    <script src="<?php echo theme_url('assets/js/jpanel.min.js'); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        var JPM = $.jPanelMenu();
        JPM.on();
    </script>
  </body>
</html>