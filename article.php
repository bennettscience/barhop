<?php theme_include('header'); ?>
<div name="post">
        <div class="post-container">
            <?php if(article_custom_field('featured_image')) : ?>
            <div class="featured" style="background-image:url('<?php echo article_custom_field('featured_image')?>')" >
            
                <div id="featured-credit">
                        <a id="credits"></a>
                </div>
            <?php elseif(article_custom_field('featured-color')) : ?>
            <div class="featured" style="background-color:<?php echo article_custom_field('featured-color')?>">
            <?php else : ?>
            <div class="featured" id="<?php echo article_id(); ?>">
            <?php endif; ?>
                <div class="title">
                        <h1><?php echo article_title(); ?></h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                        <p>Posted on <?php echo article_date(); ?> in <a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a></p>
                
                        <p><?php echo article_markdown(); ?></p>
                    <div class="share">
                        <a onclick="window.open(this.href, 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.twitter.com/share?url=<?php echo article_full_url(); ?>&text=<?php echo article_title(); ?><?php if(site_meta('twitter_account')) : ?>&via=<?php echo site_meta('twitter_account') ?><?php endif; ?>"><img src="<?php echo theme_url('assets/img/twitter.png'); ?>" /></a>
                        <a href="<?php echo article_full_url(); ?>"><img src="<?php echo theme_url('assets/img/permalink.png'); ?>" /></a>
                    </div>
                </div>
                <?php if(article_js() | article_css()): ?>
                        <script><?php echo article_js(); ?></script>
                        <style><?php echo article_css(); ?></style>
                <?php endif; ?>
            </article>
        </div>
        <!-- <?php if(comments_open()) : ?>-->
        
        <div class="comments">
                <h2>Discussion</h2>
                <form id="comment" class="comment-form" method="post" action="<?php echo comment_form_url(); ?>#comment">
                        
                        <p class="name"><?php echo comment_form_input_name('placeholder="Your name"'); ?></p>
                        
                        <p class="email"><?php echo comment_form_input_email('placeholder="Your email (not published)"'); ?></p>

                        <p class="textarea"><?php echo comment_form_input_text('placeholder="Leave your thoughts:"'); ?></p>
                        
                        <p class="submit"><button class="btn" type="submit">Post Comment</button></p>

                </form>
                
                <?php if(has_comments()) : ?>
                <ul class="commentlist">
                        <?php $i = 0; while(comments()) : $i++ ?>
                        <li class="comment" id="comment-<?php echo comment_id(); ?>">
                                <div class="wrap">
                                        <p id="comment-name"><?php echo comment_name(); ?></p>
                                        
                                        <div class="comment-content">
                                                <p><?php echo comment_text(); ?></p>
                                                
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