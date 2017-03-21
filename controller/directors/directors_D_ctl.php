<?php

require_once 'model/business/Director.php';
require_once 'model/persistence/DirectorDB.php';

if (isset($_REQUEST['submit'])) {
    $director = new Director();
    $directorDB = new DirectorDB();

    $directorDB->Eliminar($_REQUEST['id']);
    $arrayDeDirectors= $director->Llistar();
}
if (checkSession()) {
    $headerTitle = "Directors";
    require_once 'view/header.php';
    require_once 'controller/directors/directors_ctl.php';
    require_once 'view/footer.php';
} else {
    include "controller/login/login_ctl.php";
}
