<?php require('header.php') ; ?>

<body>
<?php require('bbc_news_feed.php') ; ?>

<div class="container">
    <div class="panel panel-default">
		<div class="panel-heading"><h1>BUSINESS NEWS</h1></div>
		<div class="panel-body"><?php rss_feed('http://feeds.bbci.co.uk/news/business/rss.xml'); ?></div>
    </div><!--end panel 1-->
</div><!--end main container -->
</body>
<?php require('footers.php') ; ?>