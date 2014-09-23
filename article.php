<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <?php if(article_custom_field('featured-image')) : ?>
            <div class="featured" style="background-image:url('<?php echo article_custom_field('featured-image')?>')" >
                <div id="featured-credit">
                        <a id="credits"></a>
                </div>
            <?php elseif(article_custom_field('featured-color')) : ?>
            <div class="featured" style="background-color:<?php echo article_custom_field('featured-color')?>">
            <?php else : ?>
            <div class="featured" id="<?php echo article_id(); ?>">
            <?php endif; ?>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                <h1><?php echo article_title(); ?></h1>
                    <p><?php echo article_markdown(); ?></p>
                    <div class="share">
                        <p><?php echo article_date(); ?> | <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></p>
                        <a onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="http://www.twitter.com/share?url=<?php echo article_url(); ?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter_account')) : ?>&via=<?php echo site_meta('twitter_account') ?><?php endif; ?>"><img src="<?php echo theme_url('assets/twitter.png'); ?>" /></a>
                        <a href="<?php echo article_url(); ?>"><img src="<?php echo theme_url('assets/permalink.png'); ?>" /></a>
                    </div>
                </div>
            </article>
        </div>
        <?php if(comments_open()) : ?>
        <div class="comments">
                <form id="comment" class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
                <h2>Discussion</h2>
                        <p class="input"><?php echo comment_form_notifications(); ?></p>
                        
                        <p class="input"><?php echo comment_form_input_name('placeholder="Your name"'); ?></p>
                        
                        <p class="input"><?php echo comment_form_input_email('placeholder="Your email (not published)"'); ?></p>

                        <p class="input"><?php echo comment_form_input_text('placeholder="Leave your thoughts:"'); ?></p>
                        
                        <?php echo comment_form_button(); ?>

                </form>
                
                <hr />
                
                <?php if(has_comments()) : ?>
                <ul class="commentlist">
                        <?php $i = 0; while(comments()) : $i++ ?>
                        <li class="comment" id="comment-<?php echo comment_id(); ?>">
                                <div class="wrap">
                                        <p id="comment-name"><?php echo comment_name(); ?></p>
                                        
                                        <div class="comment-content">
                                                <?php echo comment_text(); ?>
                                                <br />
                                                
                                        </div>
                                        
                                        <div class="counter">
                                                <time><a href="#comment-<?php echo comment_id(); ?>"><?php echo relative_time(comment_time()); ?></a></time>
                                                <p><?php echo $i; ?> of <?php echo total_comments(); ?></p>
                                        </div>
                                </div>
                        </li>
                        <?php endwhile; ?>
                </ul>
                <?php else : ?>
                        <p>No comments yet.</p>
                <?php endif; ?>
                
        </div>
        <?php endif; ?>
        </div>
</div>    
<?php theme_include('footer'); ?>