<?php

include_once("controller/metodesPropis/function_AutoLoad.php");

if (checkSession()) {
    $directorDB = new DirectorDB();
    $director = new Director();
    if (isset($_REQUEST['id'])) {
        $director = $directorDB->Obtenir($_REQUEST['id']);
    }

    if (isset($_REQUEST['submit'])) {

        $director->__SET('name', $_REQUEST['name']);
        $director->__SET('lastname', $_REQUEST['lastname']);
        $director->__SET('nif', $_REQUEST['nif']);

        $directorDB->Actualitzar($director);
        $headerTitle = "Modificar Director";
        header("Location: index.php?ctl=director&act=llistar"
                . "");
    } else {
        $headerTitle = "Modificar Director";
        require_once 'view/header.php';
        require_once 'view/formularis/directors/directors_U_view.php';
        require_once 'view/footer.php';
    }
} else {
    include "controller/login/login_ctl.php";
}
