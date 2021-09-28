
<?php

$error = [];





$rss = simplexml_load_file($flux[0]);
$rss2 = simplexml_load_file($flux[1]);
$rss3 = simplexml_load_file($flux[2]);


include('../views/templates/header.php');
include('../views/home.php');
include('../views/templates/footer.php');



?>