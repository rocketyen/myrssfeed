<?php
require_once(dirname(__FILE__).'/generalController.php');
require_once(dirname(__FILE__).'/../config/config.php');

$sujet1 = '<a href="'.$rss.'"></a>';


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/pages.php');
include(dirname(__FILE__).'/../views/templates/footer.php');
?>