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
    <!--DEBUT DE MES CARDS-->
<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Sujet 1</h5>
                  <p class="card-text">Sous-Titre</p>
                </div>
                <ul class="list-group list-group-flush fs-6">
                  <li class="list-group-item">Article 1</li>
                  <li class="list-group-item">Article 2</li>
                  <li class="list-group-item">Article 3</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Voir tout les articles</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Sujet 2</h5>
                  <p class="card-text">Sous-Titre</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Article 1</li>
                  <li class="list-group-item">Article 2</li>
                  <li class="list-group-item">Article 3</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Voir tout les articles</a>
                </div>
              </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Sujet 3</h5>
                  <p class="card-text">Sous-Titre</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Article 1</li>
                  <li class="list-group-item">Article 2</li>
                  <li class="list-group-item">Article 3</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="card-link">Voir tout les articles</a>
                </div>
              </div>
        </div>
    </div>
</div>
<!--FIN DE MES CARDS-->
</body>
</html>
<?php
include('../views/templates/footer.php');
?>
