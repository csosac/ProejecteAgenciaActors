<?php

$script = "<script type=\"text/javascript\" src= \"view/js/code.js\"></script><br/>";

$headerTitle = "Index";
$agencia = new Agencia();
$arrayDeActors = $agencia->getArrayDeActors();
$countActors= count($arrayDeActors);
require_once 'view/header.php';
require_once 'view/index.php';
require_once 'view/footer.php';
?>
