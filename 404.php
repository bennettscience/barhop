<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <!-- creative commons licensed (BY) flickr photo by The Preiser Project: http://flickr.com/photos/thepreiserproject/12026140993 -->
            <div class="featured" style="background:url(<?php echo theme_url('assets/404.jpg'); ?>) center center no-repeat; background-size:cover;position:relative;" >
                <div class="title">
                    <h1>You seem to be lost</h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                    <p>I can't seem to find the page you're looking for. Are you sure it was written by me? If it was, and I moved it, sorry. If not, thanks for stopping by.</p>
                    <p>Would you like to look around?</p>
                    <form class="site-search" action="/search" method="post">
                        <input type="search" class="site-search__search-term" name="term" placeholder="Search..." value>
                            <div id="text-field-container" pseudo="-webkit-texfield-decoration-container">
                                <div id="decoration"></div>
                                <div id="editing-view-port">
                                        <div id="inner-editor"></div>
                                </div>
                                <div pseudo="-webkit-search-cancel-button" id="clear" style="opacity: 0;pointer-events:none;"></div>
                            </div>
                        </input>
                    </form>
                </div>
            </article>
        </div>
    </div>
<footer name="footer">
      <footer id="footer-container">
	<div id="footer-content">
	  <p>Powered by <a href="http://www.anchorcms.com">Anchor</a>, <a href="http://jpanelmenu.com">jPanelMenu</a>, and <a href="http://www.brianbennett.org/">Barhop</a>.</p>
	</div>
      </div>
</footer>

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <!-- JpanelSlider -->
    <script src="<?php echo theme_url('/assets/js/jpanel.min.js'); ?>"></script>
    <script src="assets/js/jpanel.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var JPM = $.jPanelMenu();
        JPM.on();
    </script>
  </body>
</html>