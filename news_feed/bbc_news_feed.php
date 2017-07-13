<?php 

require_once 'RESTUtil.php';

//$url = 'http://feeds.bbci.co.uk/news/technology/rss.xml'; 

function rss_feed($url) {
$responce = curl_get($url);

$xml = simplexml_load_string($responce);


echo "<ul>";  
foreach ($xml->channel->item as $item) {
	echo " <li><a href='$item->link'><h2>$item->title</h2></a>$item->pubDate<br><h4>$item->description</h4><hr> </li>";
}	
echo "</ul>";

}



?>

