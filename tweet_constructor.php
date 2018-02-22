<?php

require_once('simple_html_dom.php');

$username = $_POST['username'];
$tweet_text = $_POST['tweet-body'];

$html = new simple_html_dom();

$html->load_file('https://www.twitter.com/' . $username);

foreach($html->find('.ProfileAvatar-image') as $image) {
    $profile_image = $image->src;
}

foreach($html->find('.ProfileHeaderCard-name') as $name) {
    $tweet_name = $name->first_child()->plaintext;
}

include('./tweet_view.php');

?>
