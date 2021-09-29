<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="darktheme.css" />
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-transparent">
      <div class="container">   
        <div class="row">
      <div class="col-md-4 mx-auto">  
      <figure class="figure">
        <img src="../assets/img/ImgHeader.png" class="img-fluid rounded" alt="Logo">  
     </figure>
 </div>
 <div class="container-fluid">
      <nav class="navbar navbar-light bg-transparent">
          <div class="container">
          <div class="justify-content-start">
          <button class="btn btn-secondary" type="button">Sujet 1</button>
          <button class="btn btn-secondary" type="button">Sujet 2</button>
          <button class="btn btn-secondary" type="button">Sujet 3</button>
          </div>
          <div class="justify-content-end">
          <a href="parametersController.php">
          <button class="btn btn-secondary " type="button">Paramétres</button>
          </a>
          </div>
          </div>
      </nav>
</div> 
</header>
<div class="form-check form-switch ms-auto mt-3 me-3">
  <label class="form-check-label ms-3" for="lightSwitch">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      largeur="25"
      hauteur="25"
      fill="couleur actuelle"
      class="bi bi-luminosité-élevée"
      viewBox="0 0 16 16"
    >
      <chemin
        d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a. 5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a. 5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-. 707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
      />
    </svg>
  </label>
  <input class="form-check-input" type="checkbox" id="lightSwitch" />
</div>
<script src="switch.js"></script>
</body>
