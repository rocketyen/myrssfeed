<?php

require_once(dirname(__FILE__).'/../config/config.php');
$error = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $mode = trim(filter_input(INPUT_POST, 'mode', FILTER_SANITIZE_STRING));
    $flux = filter_input(INPUT_POST, 'flux', FILTER_SANITIZE_URL, FILTER_REQUIRE_ARRAY);
    $numberArticle = intval(trim(filter_input(INPUT_POST, 'numberArticle', FILTER_SANITIZE_NUMBER_INT)));

    if($mode != 'dark' && $mode != 'light' ){
        $error['mode'] = 'mode manquant';
    }
    // if($flux != 'flux'){
    //     $error['flux'] = 'flux invalide faire trois selection';
    // }

    if($numberArticle != 3 && $numberArticle != 6 && $numberArticle != 9){
        $error['numberArticle'] = 'nombre invalide';
    }  
    if(empty ($error)){
        setcookie('mode', $mode, time()+3600);
        setcookie('flux', json_encode($flux), time()+3600);
        setcookie('numberArticle', $numberArticle, time()+3600);
    }  
    var_dump($error);
}

include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/parameters.php');
include(dirname(__FILE__).'/../views/templates/footer.php');
?>