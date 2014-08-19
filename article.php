<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <?php if(article_custom_field('featured-image')) : ?>
            <div class="featured" style="background:url('<?php echo article_custom_field('featured-image')?>') center center no-repeat; background-size:cover;position:relative;" >
            <?php else: ?>
            <div class="featured" style="height:250px;">
            <?php endif; ?>
                <div class="title">
                    <h1><?php echo article_title(); ?></h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                    <p><?php echo article_markdown(); ?></p>
                    <div class="share">
                        <a onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://www.twitter.com/share?url=<?php echo article_url(); ?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter_account')) : ?>&via=<?php echo site_meta('twitter_account') ?><?php endif; ?>">Sharing is Caring</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
<?php theme_include('footer'); ?>