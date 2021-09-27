
<?php

$error = [];
$actu = 'https://www.jeuxactu.com/rss/ja.rss';
$test = 'https://www.jeuxactu.com/rss/tests.rss';
$ps5 = 'https://www.jeuxactu.com/rss/ps5.rss';
$tips = 'https://www.jeuxactu.com/rss/tips.rss';
$news = 'https://www.jeuxactu.com/rss/sorties.rss';


$url = "$tips"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($url);


include('../views/templates/header.php');
include('../index.php');
include('../views/templates/footer.php');



?>