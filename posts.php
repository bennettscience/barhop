<?php theme_include('header'); ?>
<div name="home-container">
      <div id="primary">
	<div id="content" role="main">
            <?php if(has_posts()) : while(posts()) : ?>
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
          <?php endwhile; endif ?>
        </div>
      </div>
</div>
<?php theme_include('footer'); ?>
