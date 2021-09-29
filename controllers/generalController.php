<?php
require_once(dirname(__FILE__).'/../config/config.php');

$rss = simplexml_load_file($flux[0]);
$sujet1 = $rss->channel->title;
$rss2 = simplexml_load_file($flux[1]);
$sujet2 = $rss2->channel->title;
$rss3 = simplexml_load_file($flux[2]);
$sujet3 = $rss3->channel->title;

?>

