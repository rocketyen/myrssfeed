<?php

 include('../assets/config/config.php')
?>


<?php
echo '<div class="container"><div class="row"><div class="col-4"><ul>';

foreach($rss->channel->image as $item1){
    echo '<li>' .$item1->title. '<a href="'.$item1->link.'" target="blank"><img src="'.$item1->url.'"></a> </li>';
}

foreach ($rss->channel->item as $item){
 $datetime = date_create($item->date);
 $date = date_format($datetime, 'd M Y, H\hi');
 
 echo '<li><a href="'.$item->link.'" target="blank">'.$item->title.'</a> ('.$date.')'.$item-> description.'</li>';
 echo '<img src="'.$item->enclosure['url'].'">';
}
echo '</ul>';
echo '</div>';

echo '<div class="col-4">';
echo '<ul>';
foreach($rss2->channel->image as $item1){
    echo '<li>' .$item1->title. '<a href="'.$item1->link.'" target="blank"><img src="'.$item1->url.'"></a> </li>';
}

foreach ($rss2->channel->item as $item){
 $datetime = date_create($item->date);
 $date = date_format($datetime, 'd M Y, H\hi');
 
 echo '<li><a href="'.$item->link.'" target="blank">'.$item->title.'</a> ('.$date.')'.$item-> description.'</li>';
 echo '<img src="'.$item->enclosure['url'].'">';
}
echo '</ul>';
echo '</div>';


echo '<div class="col-4"><ul>';
foreach($rss3->channel->image as $item1){
    echo '<li>' .$item1->title. '<a href="'.$item1->link.'" target="blank"><img src="'.$item1->url.'"></a> </li>';
}

foreach ($rss3->channel->item as $item){
 $datetime = date_create($item->date);
 $date = date_format($datetime, 'd M Y, H\hi');
 
 echo '<li><a href="'.$item->link.'" target="blank">'.$item->title.'</a> ('.$date.')'.$item-> description.'</li>';
 echo '<img src="'.$item->enclosure['url'].'">';
}
echo '</ul></div></div>';
?>