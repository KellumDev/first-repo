<?php require('header.php') ; ?>

<body>
<?php require('bbc_news_feed.php') ; ?>

<div class="container">
    <div class="panel panel-default">
    	<div class="panel-heading"><h1>POLITICAL NEWS</h1></div>
        <div class="panel-body"><?php rss_feed('http://feeds.bbci.co.uk/news/politics/rss.xml'); ?></div>
    </div><!--end content 1-->
</div><!--end main content -->
</body>
<?php require('footers.php') ; ?>