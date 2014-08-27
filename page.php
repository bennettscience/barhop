<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <?php if(page_custom_field('page-featured-image')) : ?>
            <div class="page-featured" style="background:url('<?php echo page_custom_field('page-featured-image')?>') center center no-repeat; background-size:cover;position:relative;" >
            <?php else: ?>
            <div class="page-featured" style="height:250px;">
            <?php endif; ?>
                <div class="title">
                    <h1><?php echo page_title($fallback=''); ?></h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                    <p><?php echo page_content(); ?></p>
                </div>
            </article>
        </div>
    </div>
<?php theme_include('footer'); ?>