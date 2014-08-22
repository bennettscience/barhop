<?php

function twitter_account() {
    return Config::get('meta.twitter');
}

function twitter_url() {
    return 'http://www.twitter.com/' . twitter_account();
}

?>