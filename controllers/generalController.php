<?php
$xml1 = simplexml_load_file('https://www.jeuxactu.com/rss/ja.rss');
$sujet1 = $xml1->channel->title;
$xml2 = simplexml_load_file('https://www.jeuxactu.com/rss/tests.rss');
$sujet2 = $xml2->channel->title;
$xml3 = simplexml_load_file('https://www.jeuxactu.com/rss/ps5.rss');
$sujet3 = $xml3->channel->title;
?>

