<?php theme_include('header'); ?>
<div name="home-container" style="height:100%;">
      <div class="primary">
	    <div id="content" role="main">
		  <h1>Found <?php echo total_search_results() . pluralise(total_search_results(), ' result'); ?> for "<?php echo search_term(); ?>"</h1>
	    <?php if(has_search_results()) : ?>
		  <?php while(search_results()) : ?>
			<?php if(article_custom_field('featured-image')): ?>
			      <article class="post" style="background:url('<?php echo article_custom_field('featured-image') ?>')">
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
		  <div class="featured" style="background-image:url(https://farm6.staticflickr.com/5056/5421517469_d0d2997eec_b.jpg);height:550px;">
			<div class="title">
			      <h1>Sorry, nothing matched. Try again?</h1>
			</div>
		  </div>
	    <?php endif; ?>
	    </div>
      </div>
</div>
<?php theme_include('footer'); ?>