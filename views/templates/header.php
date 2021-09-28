<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-secondary">
      <div class="container">   
        <div class="row">
      <div class="col-md-4 mx-auto">  
      <figure class="figure">
        <img src="../assets/img/ImgHeader.png" class=" img-fluid rounded alt="Logo">  
     </figure>
 </div>
 <div class="container-fluid">
      <nav class="navbar navbar-light bg-secondary">
          <div class="container">
          <div class="justify-content-start">
          <button class="btn " type="button" name="sub1" value="<?= $sub ?>">Sujet 1</button>
          <button class="btn " type="button" name="sub2" value="<?= $sub ?>">Sujet 2</button>
          <button class="btn " type="button" name="sub3" value="<?= $sub ?>">Sujet 3</button>
          </div>
          <div class="justify-content-end">
          <a href="parametersController.php">
          <button class="btn " type="button">Paramètres</button>
          </a>
          </div>
          </div>
      </nav>
</div> 
</header>
</body>
