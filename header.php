<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset="UTF-8">
    <meta name="viewport" content="width=device-width" initial-scale="1">
    <meta name="generator" content="Anchor CMS">
    <!-- Page Title -->
    <title><?php echo page_title("Page can't be found"); ?> - <?php echo site_name(); ?></title>
    <!-- Asset Links -->
    <link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>" type="image/x-icon" />
  </head>
  
  <body>
    <header class="header">
      <div id="trigger">
          <a href="#menu-block" class="menu-trigger">Menu</a>
      </div>
      <div id="blog-title">
	<?php echo site_name(); ?>
      </div>
      <?php if(has_menu_items()) : ?>
        <div role="navigation" id="menu">
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
	  <ul>
            <?php while(menu_items()) : ?>
            <li class="list-heading">Navigation</li>
	    <li class="list-item"><a href="<?php echo base_url(); ?>" title="<?php echo site_name(); ?>">Home</a></li>
	    <li class="list-item"><a href="http://www.brianbennett.org/">About</a></li>
	    <li class="list-item"><a href="<?php echo site_meta('twitter_url'); ?>">Twitter</a></li>
            <li class="list-heading">Categories</li>
            <?php while(categories()) : ?>
            <li class="list-item"><a href="<?php echo category_url(); ?>" title="<?php echo category_title(); ?>"><?php echo category_title(); ?></a></li>
            <?php endwhile; ?>
	  </ul><!-- #menu -->
          <?php endwhile; ?>
      </div><!-- navigation -->
    </header><!-- header -->
    <?php endif; ?>