
<?php

require_once(dirname(__FILE__).'/../assets/config/config.php');
$error = [];
$flux[0] = filter_input(INPUT_POST, 'flux', FILTER_REQUIRE_ARRAY);

include(dirname(__FILE__).'/generalController.php');
include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/home.php');
include(dirname(__FILE__).'/../views/templates/footer.php');
?>