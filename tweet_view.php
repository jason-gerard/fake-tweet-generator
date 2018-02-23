<style>

body {
    font-family: Arial, sans-serif;
    color: #292f33;
}

.tweetEntry-tweetHolder {
    border-left: 1px solid #e1e8ed;
    border-right: 1px solid #e1e8ed;
    border-top: 1px solid #e1e8ed;
    width: 588px;
    margin: auto;
}

.tweetEntry-tweetHolder:hover {
    background-color: #f5f8fa;
}

.tweetEntry-action-list {
    display: block;
    line-height: 18px;
    margin-left: 58px;
    margin-top: 10px;
    color: #292f33;
}

.comment:hover {
    color: #1DA1F2;
    text-color: #1DA1F2;
}

.comment:hover .fa-comment {
    color: #1DA1F2;
    text-color: #1DA1F2;
}

.fa-retweet:hover {
    color: #5cd65c;
}

.retweet:hover .fa-retweet {
    color: #5cd65c;
    text-color: #5cd65c;
}

.fa-heart:hover {
    color: #ff3333;
}

.heart:hover .fa-heart {
    color: #ff3333;
    text-color: #ff3333;
}

.fa-envelope:hover {
    color: #1DA1F2;
}

.fa-chevron-down:hover {
    color: #1DA1F2;
}

.fa-chevron-down {
    float: right;
}

.tweetEntry {
    border-bottom: 1px solid #e1e8ed;
    cursor: pointer;
    min-height: 51px;
    padding: 9px 12px;
}

.tweetEntry-content {
    display: block;
    font-size: 14px;
    margin-left: 58px;
    font-size: 14px;
}

.tweetEntry-account-group {
    color: #8899a6;
    padding: 0px;
    text-decoration: none;
    line-height: 20px;
}

.tweetEntry-avatar {
    float: left;
    height: 48px;
    width: 48px;
    margin-left: -58px;
    border-radius: 50%;
}

.tweetEntry-fullname {
    font-weight: bold;
    font-size: 14px;
    color: #292f33;
    padding: 0px;
}

.tweetEntry-fullname:hover {
    color: #1DA1F2;
    text-decoration: underline;
}

.tweetEntry-username {
    font-weight: normal;
    font-size: 14px;
    color: #657786;
    padding: 0px;
}

.tweetEntry-timestamp {
    font-size: 14px;
    color: #657786;
    padding: 0px;
}

.tweetEntry-timestamp::before {
    content: "\00b7";
}

.tweetEntry-text-container {
    word-wrap: break-word;
    font-size: 14px;
    color: #292f33;
    line-height: 18px;
}

.action-num {
    color: #657786;
    font-size: 12px;
    font-weight: bold;
    line-height: 1;
}

</style>

<div class="tweetEntry-tweetHolder">

    <div class="tweetEntry">

        <div class="tweetEntry-content">

            <div class="tweetEntry-account-group">

                <img class="tweetEntry-avatar" src="<?php echo $profile_image ?>">

                <strong class="tweetEntry-fullname">
                    <?php echo $tweet_name ?>
                </strong>

                <span class="tweetEntry-username">
                    @<?php echo $username ?>
                </span>

                <span class="tweetEntry-timestamp">
                    <?php echo $post_date ?>
                </span>

                <i class="fas fa-chevron-down"></i>

            </div>

            <div class="tweetEntry-text-container">
                <?php echo $tweet_text ?>
            </div>

        </div>

        <div class="tweetEntry-action-list d-flex" style="line-height:24px; color: #657786;">
            <div class="comment">
                <i class="far fa-comment mr-2"></i>
                <span class="action-num mr-4 fa-comment">573</span>
            </div>
            <div class="retweet">
                <i class="fa fa-retweet mr-2"></i>
                <span class="action-num mr-4 fa-retweet">1.7K</span>
            </div>
            <div class="heart">
                <i class="far fa-heart mr-2"></i>
                <span class="action-num mr-4 fa-heart">5.7K</span>
            </div>
            <div>
                <i class="far fa-envelope"></i>
            </div>
        </div>

    </div>

</div>