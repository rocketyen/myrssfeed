<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="indexController.php" method="POST" class="bg-dark checkbox-white text-white">
        <h1 class="text-center mb-5 mt-5 pt-5">
            Quels sont vos centres d'intérets préférés (Faire 3 choix) ?
        </h1>
        <div class="form-group mt-2">            
            <input  type="checkbox" 
                    class="offset-5 case"
                    onClick="doAction()"
                    value="<?= htmlspecialchars($actu ?? '') ?>" 
                    id="actu" 
                    name="actu">
            <label for="actu">Actualités du Jeu Video</label>
        </div>
        <div class="form-group mt-2">            
            <input  type="checkbox" 
                    class="offset-5 case"
                    onClick="doAction()"
                    value="<?= htmlspecialchars($test?? '') ?>" 
                    id="test" 
                    name="test">
            <label for="test">Test et Gameplay de Jeux vidéos</label>
        </div>
        <div class="form-group mt-2">            
            <input  type="checkbox" 
                    class="offset-5 case"
                    onClick="doAction()"
                    value="<?= htmlspecialchars($ps5 ?? '') ?>" 
                    id="ps5" 
                    name="ps5">
            <label for="ps5">Tout sur la PS5</label>
        </div>
        <div class="form-group mt-2">            
            <input  type="checkbox" 
                    class="offset-5 case"
                    onClick="doAction()"
                    value="<?= htmlspecialchars($tips ?? '') ?>" 
                    id="tips" 
                    name="tips">
            <label for="tips">Trucs et astuces</label>
        </div>
        <div class="form-group mt-2">            
            <input  type="checkbox" 
                    class="offset-5 case mb-5"
                    onClick="doAction()"
                    value="<?= htmlspecialchars($news ?? '') ?>" 
                    id="news" 
                    name="news">
            <label for="news">Les dernières sorties Jeux Vidéos </label>
        </div>
        <div class="button">
            <button type="submit" class="btn btn-primary offset-4 col-4 mt-3 mb-5">Valider le formulaire</button>
        </div>
    </form>
    <script src="../assets/js/script.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>   
</body>
</html>
