<?php
include_once("controller/metodesPropis/function_AutoLoad.php");


if (isset($_REQUEST['submit'])) {
$directorDB = new DirectorDB();

$director = new Director();

$director->__SET('name',$_REQUEST['name']);
$director->__SET('lastname',$_REQUEST['lastname']);
$director->__SET('nif', $_REQUEST['nif']);

$directorDB->Registrar($director);
   
}
if (checkSession()) {
    $headerTitle = "Afegir Director";
    require_once 'view/header.php';
    require_once 'view/formularis/directors/directors_C_view.php';
    require_once 'view/footer.php';
} else {
    include "controller/login/login_ctl.php";
}

