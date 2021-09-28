
<?php
$error = [];
$actu = "https://www.jeuxactu.com/rss/tests.rss"; /* insérer ici l'adresse du flux RSS de votre choix */
$rss = simplexml_load_file($actu);

include('../views/templates/header.php');
<html>
<?php
/* Ceci produira une erreur. Notez la sortie ci-dessus,
 * qui se trouve avant l'appel à la fonction header() */
header('Location: http://www.example.com/');
exit;
?>
include('../views/templates/footer.php');

?>
