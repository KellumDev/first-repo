<?php require('header.php'); ?>

<body>
<?php require('bbc_news_feed.php') ; ?>
<?php require('menu.php') ; ?>
<h1>TOP NEWS</h1>
    <div id="mainContent">
        <div id="content_1">
            <?php rss_feed('http://feeds.bbci.co.uk/news/rss.xml'); ?>
        </div><!--end content 1-->
    </div><!--end main content -->
</body>

<?php require('footers.php'); ?>