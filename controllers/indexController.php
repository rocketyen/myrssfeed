
<?php
$error = [];
$actu = "https://www.jeuxactu.com/rss/tests.rss"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($actu);

include('../views/templates/header.php');
include('../index.php');
include('../views/templates/footer.php');

?>
