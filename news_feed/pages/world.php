<?php require('header.php') ; ?>

<body>
<?php require('bbc_news_feed.php') ; ?>


<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h1>WORLD NEWS</h1></div>
        <div class="panel-body"> <?php rss_feed('http://feeds.bbci.co.uk/news/world/rss.xml'); ?></div>
        </div><!--end content 1-->
    </div><!--end container -->
</body>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h1>TECHNOLOGY NEWS</h1></div>
        <div class="panel-body"> <?php rss_feed('http://feeds.bbci.co.uk/news/technology/rss.xml'); ?></div>
    </div>
</div>
<?php require('footers.php') ; ?>