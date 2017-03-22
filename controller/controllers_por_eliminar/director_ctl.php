<?php
include_once("controller/metodesPropis/function_AutoLoad.php");
    $directorDB = New DirectorDB();
   
    $director=$directorDB->Obtenir($_REQUEST['id']);
    
 
if (checkSession()) {
    $headerTitle = "Directors";
    require_once 'view/header.php';
    require_once 'view/formularis/directors/director_view.php';
    require_once 'view/footer.php';
} else {
    include "controller/login/login_ctl.php";
}
