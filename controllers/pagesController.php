<?php
require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/generalController.php');

$rss = simplexml_load_file($flux[0]);

require_once(dirname(__FILE__).'/generalController.php');
include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/pages.php');
include(dirname(__FILE__).'/../views/templates/footer.php');

?>