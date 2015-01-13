<?php theme_include('header'); ?>
<div name="404">
        <div class="post-container">
            <div class="featured" style="background-image:url('https://farm6.staticflickr.com/5056/5421517469_d0d2997eec_b.jpg');height:450px;" >
                <div class="title">
                    <h1>Sorry, that doesn't exist</h1>
                </div>
            </div> <!-- featured image -->
            <article class="the-post">
                <div class="content-container">
                    <p>Try searching for the post you want using the search box below.</p>
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