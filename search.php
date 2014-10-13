<?php theme_include('header'); ?>
<div name="home-container" style="height:100%;">
      <div class="primary">
	    <div id="content" role="main">
		  <h1>Found <?php echo total_search_results() . pluralise(total_search_results(), ' result'); ?> for "<?php echo search_term(); ?>"</h1>
	    <?php if(has_search_results()) : ?>
		  <?php while(search_results()) : ?>
			<?php if(article_custom_field('featured-image')): ?>
			      <article class="post" style="background:url('<?php echo article_custom_field('featured-image') ?>') center center no-repeat;background-size:cover;">
			<?php elseif(article_custom_field('featured-color')) : ?>
			      <article class="post" id="<?php echo article_id(); ?>" style="background-color:<?php echo article_custom_field('featured-color') ?>">
			<?php else : ?>
			      <article class="post" id="<?php echo article_ID(); ?>">
			<?php endif; ?>
				          <div class="the-content">
						<div class="date">
						      <p><?php echo article_date(); ?></p>
						</div> 
					  <div class="title">
					  	  <a class="headline" href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
					  </div> 
	      
					  <div class="post-snippet">
						<p><?php echo article_description(); ?></p> 
					  </div> 
					  <div class="meta">
						<ul>
						      <a href="<?php echo article_category_url(); ?>" class="categories"><?php echo article_category(); ?></a> 
						</ul>
					  </div>
					  </div>
			      </article>
		  <?php endwhile; ?>
	    <?php else: ?>
		  <div class="search-featured">
			<div class="title">
			      <p>Sorry, nothing matched. Try again?</p>
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
			</div>
		  </div>
	    <?php endif; ?>
	    </div>
      </div>
</div>
<?php theme_include('footer'); ?>