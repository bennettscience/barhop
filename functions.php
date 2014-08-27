<?php

function twitter_account() {
    return site_meta('twitter', 'bennettscience');
}

function twitter_url() {
    return 'http://www.twitter.com/' . twitter_account();
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}
?>