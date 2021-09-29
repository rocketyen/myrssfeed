<?php

require_once(dirname(__FILE__).'/../assets/config/config.php');
$error = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $flux1 = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    $flux2 = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    $flux3 = trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));

    setcookie('flux', $flux[$flux1],time()+3600);
    setcookie('flux1',$flux[$flux2],time()+3600);
    setcookie('flux2',$flux[$flux3],time()+3600);


}
// if($_SERVER['REQUEST_METHOD'] == 'POST'){

// $darkMode = intval(trim(filter_input(INPUT_POST, 'darkMode', FILTER_SANITIZE_NUMBER_INT)));
// $nbNews = intval(trim(filter_input(INPUT_POST, 'nbNews', FILTER_SANITIZE_NUMBER_INT)));
$flux = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);

// if($darkMode!=1 && $darkMode !=0){
//     $error
// }
// }


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/parameters.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>