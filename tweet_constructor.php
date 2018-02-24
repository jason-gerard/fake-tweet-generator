<?php

$username = $_POST['username'];
$tweet_text = $_POST['tweet-body'];

require_once('simple_html_dom.php');

$html = new simple_html_dom();

$profile_link = 'https://www.twitter.com/' . $username;

$html->load_file($profile_link);


$profile_image = $html->find('.ProfileAvatar-image', 0)->src;
$tweet_name = $html->find('.ProfileHeaderCard-name', 0)->first_child()->plaintext;
$date = date('M j');

$tweet_view = new simple_html_dom();

$tweet_view->load_file('tweet_view.php');

$tweet_view->find('.tweetEntry-avatar', 0)->src = $profile_image;
$tweet_view->find('.tweetEntry-fullname', 0)->innertext = $tweet_name;
$tweet_view->find('.tweetEntry-username', 0)->innertext = $username;
$tweet_view->find('.tweetEntry-timestamp', 0)->innertext = $date;
$tweet_view->find('.tweetEntry-text-container', 0)->innertext = $tweet_text;

$tweet_list = $html->find('ol[class=stream-items]',0);
$tweet_list->outertext = $tweet_view . $tweet_list->outertext;

$doc = $html;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Fake Tweet Generator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    <?php echo $doc ?>
    <!-- <div class="div">
        <a class="btn btn-primary" href="./">New Tweet</a>
    </div> -->
</body>
</html>