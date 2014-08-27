<?php theme_include('header'); ?>
<div name="home-container" style="height:100%;">
      <div id="primary">
	    <div id="content" role="main">
		  <h1>Found <?php echo total_search_results() . pluralise(total_search_results(), ' result'); ?> for "<?php echo search_term(); ?>"</h1>
	    <?php if(has_search_results()) : ?>
		  <?php while(search_results()) : ?>
			<?php if(article_custom_field('featured-image')): ?>
			      <article class="post" style="background:url(<?php echo article_custom_field('featured-image') ?>) center center no-repeat;background-size:cover;">
			<?php else: ?>
			      <article class="post">
			<?php endif; ?>
				    <div class="bg-clear">
				          <div class="the-content">
						<div class="date">
						      <p><?php echo article_date(); ?></p>
						</div> <!-- date -->
					  <div class="title">
					  	  <a class="headline" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					  </div> <!-- title -->
	      
					  <div class="post-snippet">
						<p><?php echo article_description(); ?></p> 
					  </div> <!-- post-snippet  -->
					  <div class="meta">
						<ul>
						      <a href="<?php echo category_url(); ?>" class="categories"><?php echo category_title(); ?></a>
						</ul>
					  </div><!-- meta -->
					  </div><!-- content -->
				    </div><!-- -bg-clear -->
			      </article><!-- post -->
		  <?php endwhile; ?>
	    <?php else: ?>
		  <div class="search-featured">
			<div class="title">
			      <p>Sorry, nothing matched. <a class="menu-trigger" href="menu-block">Try again?</a></p>
			</div>
		  </div>
	    <?php endif; ?>
	    </div>
      </div>
</div>
<?php theme_include('footer'); ?>