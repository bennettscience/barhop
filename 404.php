<?php theme_include('header'); ?>
<div name="404">
        <div class="404-post-container">
            <div class="featured" id="404">
                <div class="title">
                    <h1>You seem to be lost</h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                    <p>I can't seem to find the page you're looking for. Are you sure it was written by me? If it was, and I moved it, sorry. If not, thanks for stopping by.</p>
                    <p>Would you like to look around?</p>
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
            </article>
        </div>
    </div>
<?php theme_include('footer'); ?>