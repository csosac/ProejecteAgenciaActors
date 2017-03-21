<?php

include_once("controller/metodesPropis/function_AutoLoad.php");

$director = new Director();
$directorDB = new DirectorDB();
if (isset($_REQUEST['id'])) {
    $director = $directorDB->Obtenir($_REQUEST['id']);
}

require_once 'view/header.php';
require_once 'view/directors/directors_R_view.php';
require_once 'view/footer.php';
