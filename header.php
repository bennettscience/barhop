<!DOCTYPE html>
<html lang="en-US" style="height:100%;">
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
    <link href='//fonts.googleapis.com/css?family=Merriweather:300,400,900|Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  </head>
  
  <body>
    <div class="sidebar">
      <div id="blog-title">
	<a href="<?php echo base_url('posts'); ?>" title="home"><?php echo site_name(); ?></a>
      </div>
        <div role="navigation" id="menu">
	  <?php if(has_menu_items()) : ?>
	  <div class="page-menu">
	    <ul>
	      <?php while(menu_items()) : ?>
	      <li class="list-item"><a href="<?php echo menu_url('include-in-menu'); ?>" title="<?php echo menu_title(); ?>" class="<?php echo menu_active() ? 'active' : '' ?>"><?php echo menu_name(); ?></a></li>
	      <?php endwhile; ?>
	    </ul>
	  </div>  
	  <?php endif; ?>
	  <form class="site-search" action="<?php echo search_url(); ?>" method="post">
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
	  <!--<div id="cat">
	    <select onchange="location = this.options[this.selectedIndex].value;">
	      <option selected="selected">Select a category</option>
	      <?php while(categories()) : ?>
	      <option value="<?php echo category_url(); ?>"><?php echo category_title(); ?> (<?php echo category_count(); ?>)</option>
	      <?php endwhile; ?>
	    </select>
	</div>-->
	  
      </div><!-- navigation -->
      <div id="dev-info">
	<ul>
	  <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	  <?php if(site_meta('twitter_account')) : ?>
	  <li><a href="<?php echo twitter_url(); ?>">Twitter</a></li>
	  <?php endif; ?>
	  <?php if(user_authed()) : ?>
	  <li><a href="<?php echo base_url('/admin'); ?>">Admin</a></li>
	  <?php endif; ?>
	</ul>
	<p>Powered by <a href="http://www.anchorcms.com">Anchor</a> and <a href="https://github.com/TSCBennett/barhop">Barhop</a>.</p>
      </div>
    </div><!-- sidebar -->
    <div id="mobile-header">
      <ol class="mobile-menu">
	<li><a href="<?php echo base_url(); ?>">Home</a></li>
	<li><a href="<?php echo base_url('search'); ?>">Search</a></li>
      </ol>
    </div>
