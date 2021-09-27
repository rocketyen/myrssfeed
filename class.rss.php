<?php
$url = "https://www.jeuxactu.com/rss/tests.rss"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);
echo '<ul>';
foreach($rss->channel->image as $item1){
    echo '<li>' .$item1->title. '<a href="'.$item1->link.'" target="blank"><img src="'.$item1->url.'"></a> </li>';
}
foreach ($rss->channel->item as $item){
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 
 echo '<li><a href="'.$item->link.'" target="blank">'.$item->title.'</a> ('.$date.')'.$item-> description.'</li>';
 echo '<img src="'.$item->enclosure['url'].'">';
}
echo '</ul>';
?>