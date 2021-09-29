<?php
echo '<div class="container"><div class="row"><div class="col-4"><ul>';

// boucle pour 1er flux
foreach ($rss->channel->image as $item1) {
    echo '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a>';
}

foreach ($rss->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul></div>';


// boucle pour 2eme flux
echo '<div class="col-4"><ul>';
foreach ($rss2->channel->image as $item1) {
    echo '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a>';
}

foreach ($rss2->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul></div>';


// boucle pour 3eme flux
echo '<div class="col-4"><ul>';
foreach ($rss3->channel->image as $item1) {
    echo '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a>';
}

foreach ($rss3->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul></div></div>';
?>