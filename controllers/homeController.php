
<?php
$error = [];
$flux[0] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
echo '<div class="container"><div class="row"><div class="col-4"><ul>';

foreach ($rss->channel->image as $item1) {
    echo '<li>' . $item1->title . '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a> </li>';
}

foreach ($rss->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul>';
echo '</div>';

echo '<div class="col-4">';
echo '<ul>';
foreach ($rss2->channel->image as $item1) {
    echo '<li>' . $item1->title . '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a> </li>';
}

foreach ($rss2->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul>';
echo '</div>';


echo '<div class="col-4"><ul>';
foreach ($rss3->channel->image as $item1) {
    echo '<li>' . $item1->title . '<a href="' . $item1->link . '" target="blank"><img src="' . $item1->url . '"></a> </li>';
}

foreach ($rss3->channel->item as $item) {
    $datetime = date_create($item->date);
    $date = date_format($datetime, 'd M Y, H\hi');

    echo '<li><a href="' . $item->link . '" target="blank">' . $item->title . '</a> (' . $date . ')' . $item->description . '</li>';
    echo '<img src="' . $item->enclosure['url'] . '">';
}
echo '</ul></div></div>';
include('../views/templates/header.php');
include('../views/home.php');
include('../views/templates/footer.php');
?>