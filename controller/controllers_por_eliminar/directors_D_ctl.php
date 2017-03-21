<?php

require_once 'model/business/Director.php';
require_once 'model/persistence/DirectorDB.php';
if (checkSession()) {
    $director = new Director();
    $directorDB = new DirectorDB();

    if (isset($_REQUEST['id'])) {
        $directorDB->Eliminar($_REQUEST['id']);
    }

    if (isset($_REQUEST['submit'])) {     
        header("Location: index.php?ctl=director&act=llistar"
                . "");
    } else {
        $headerTitle = "Directors";
        require_once 'view/header.php';
        require_once 'controller/directors/directors_ctl.php';
        require_once 'view/footer.php';
    }
} else {
    include "controller/login/login_ctl.php";
}
