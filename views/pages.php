<?php
include('../views/templates/header.php');
include('../class.rss.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="offset-4 col-4 form-label mt-2"><?= $actu ?></div>
    <div class="offset-4 col-4 form-label mt-2"><?= $test ?></div>
    <div class="offset-4 col-4 form-label mt-2"><?= $ps5 ?></div>
    <div class="offset-4 col-4 form-label mt-2"><?= $tips ?></div>
    <div class="offset-4 col-4 form-label mt-2"><?= $news ?></div>
</body>
</html>
<?php
include('../views/templates/footer.php');
?>