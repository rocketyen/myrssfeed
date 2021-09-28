<?php
$error = [];
// $flux = [];
include('../views/templates/header.php');
include('../views/parameters.php');
include('../views/templates/footer.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $flux[0] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
    $flux[1] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
    $flux[2] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
    $flux[3] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
    $flux[4] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
    setcookie($flux[]);
} 
// $darkMode = intval(trim(filter_input(INPUT_POST, 'darkMode', FILTER_SANITIZE_NUMBER_INT)));
// $nbNews = intval(trim(filter_input(INPUT_POST, 'nbNews', FILTER_SANITIZE_NUMBER_INT)));
// $flux = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);
// if($darkMode!=1 && $darkMode !=0){
//     $error
// }
// }
include('../views/templates/footer.php');
?>