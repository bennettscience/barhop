<?php

function twitter_account() {
    return Config::get('meta.twitter');
}

function twitter_url() {
    return 'http://www.twitter.com/' . twitter_account();
}

function article_previous_url() {
	$page = Registry::get('posts_page');
	$query = Post::where('created', '<', Registry::prop('article', 'created'))
				->where('status', '!=', 'draft');

	if($query->count()) {
		$article = $query->sort('created', 'desc')->fetch();
		$page = Registry::get('posts_page');

		return base_url($page->slug . '/' . $article->slug);
	}
}

function article_next_url() {
	$page = Registry::get('posts_page');
	$query = Post::where('created', '>', Registry::prop('article', 'created'))
				->where('status', '!=', 'draft');

	if($query->count()) {
		$article = $query->sort('created', 'asc')->fetch();
		$page = Registry::get('posts_page');

		return base_url($page->slug . '/' . $article->slug);
	}
}

?>