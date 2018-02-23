<?php

require_once('simple_html_dom.php');

$username = $_POST['username'];
$tweet_text = $_POST['tweet-body'];
$post_date = date('M j');

$html = new simple_html_dom();

$profile_link = 'https://www.twitter.com/' . $username;

$html->load_file($profile_link);

foreach($html->find('.ProfileAvatar-image') as $image) {
    $profile_image = $image->src;
}

foreach($html->find('.ProfileHeaderCard-name') as $name) {
    $tweet_name = $name->first_child()->plaintext;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fake Tweet Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 150px">
        <div class="row">
            <?php
                include('tweet_view.php');
            ?>
        </div>
        <a style="margin-top: 150px; margin-left: 276px;" class="btn btn-primary" href="./">New Tweet</a>
    </div>
</body>
</html>