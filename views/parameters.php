
<form action="" method="POST" class="bg-dark checkbox-white text-white">
    <h1 class="text-center mb-5 mt-5 pt-5">
        Quels sont vos centres d'intérets préférés (Faire 3 choix) ?
    </h1>
    <div class="form-group mt-2">
        <label for="actu"  class="offset-5 case">Mode : </label>
        <label for="actu" value="light" >Clair</label>
        <input type="radio" value="light" name="mode">
        <label for="actu" value="dark">Foncé</label>        
        <input type="radio" value="dark" name="mode">
    </div>
    <div class="form-group mt-2">
        <input type="checkbox" 
        class="offset-5 case" 
        onClick="doAction()" 
        value="<?= $flux[0] ?>" 
        id="actu" 
        name="flux[]">
        <label for="actu"> Actualités du Jeu Video</label>
    </div>
    <div class="form-group mt-2">
        <input type="checkbox" 
        class="offset-5 case" 
        onClick="doAction()" 
        value="<?= $flux[1] ?>" 
        id="test" 
        name="flux[]">
        <label for="test">Test et Gameplay de Jeux vidéos</label>
    </div>
    <div class="form-group mt-2">
        <input type="checkbox" 
        class="offset-5 case" 
        onClick="doAction()" 
        value="<?= $flux[2] ?>" 
        id="ps5" 
        name="flux[]">
        <label for="ps5">Tout sur la PS5</label>
    </div>
    <div class="form-group mt-2">
        <input type="checkbox" 
        class="offset-5 case" 
        onClick="doAction()" 
        value="<?= $flux[3] ?>" 
        id="tips" 
        name="flux[]">
        <label for="tips">Trucs et astuces</label>
    </div>
    <div class="form-group mt-2">
        <input type="checkbox" 
        class="offset-5 case mb-3" 
        onClick="doAction()" 
        value="<?= $flux[4] ?>" 
        id="news" 
        name="flux[]">
        <label for="news">Les dernières sorties Jeux Vidéos </label>
    </div>
    <div>
    <label for="actu"  class="offset-5 case">Nombre d'affichage par page : </label>
        <select name="numberArticle" id="">
            <option value="3">3</option>
            <option value="6">6</option>
            <option value="9">9</option>
        </select>
    </div>
    <div class="button">
        <button type="submit" class="btn btn-primary offset-4 col-4 mt-3 mb-5">Valider le formulaire</button>
    </div>
</form>
<footer>

</footer>
<script src="../assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
