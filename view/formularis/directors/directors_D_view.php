<?php
include_once("controller/metodesPropis/function_AutoLoad.php");

if (isset($_REQUEST['submit'])) {
    $director = New DirectorDB();
    $director->Eliminar($_REQUEST['id']);
}
if (checkSession()) {
    $headerTitle = "Directors";
    require_once 'view/header.php';
    require_once 'view/formularis/directors/directors_view.php';
    require_once 'view/footer.php';
} else {
    include "controller/login/login_ctl.php";
}