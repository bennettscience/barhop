<?php theme_include('header'); ?>
<div name="home-container">
      <div class="primary">
	<div id="content" role="main">
            <?php if(has_posts()) : while(posts()) : ?>
		  <?php if(article_custom_field('featured_image')): ?>
			<article class="post" id="<?php echo article_id(); ?>" style="background-image:url('<?php echo article_custom_field('featured_image') ?>')">
		  <?php elseif(article_custom_field('featured-color')) : ?>
			<article class="post" id="<?php echo article_id(); ?>" style="background-color:<?php echo article_custom_field('featured-color') ?>">
		  <?php else : ?>
			<article class="post" id="<?php echo article_ID(); ?>">
		  <?php endif; ?>
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
							    <a href="<?php echo article_category_url(); ?>" class="categories"><?php echo article_category(); ?></a> 
						      </ul>
						</div><!-- meta -->
				    </div><!-- content -->
			</article><!-- post -->
	    <?php endwhile; ?>
	    <?php if(has_pagination()) : ?>
	    <div class="pagination">
		  <p><?php echo posts_prev(); ?> | <?php echo posts_next(); ?></p>
	    </div><!-- pagination -->
	    <?php endif; ?>
        </div>
      </div>
</div>
      <?php endif; ?>
<?php theme_include('footer'); ?>
