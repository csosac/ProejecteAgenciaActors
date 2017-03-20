<?php

include 'controller/metodesPropis/checkSession.php';
include 'controller/metodesPropis/createCookie.php';
include 'controller/metodesPropis/deleteCookie.php';
include 'controller/metodesPropis/getCookie.php';

require_once("config/inici.inc.php");
require_once("controller/metodesPropis/function_AutoLoad.php");

if (isset($_SESSION['agencia'])) {
    $agencia = unserialize($_SESSION['agencia']);
} else {
    $agencia = New Agencia("Agencia Actors");
    $agencia->populateAgencia();
    $_SESSION['agencia'] = serialize($agencia);
}
$ctl = "index";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    $id = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
    }
}

switch ($ctl) {
    case"usuari";
        if ($act == 'login') {
            include "controller/login/login_ctl.php";
            break;
        } elseif ($act == 'logout') {
            include "controller/login/logout_ctl.php";
        }
        break;

    case"actor":
        if ($act == 'afegir') {
            include "controller/actors/actors_C_ctl.php";
        } elseif ($act == 'modificar') {
            include "controller/actors/actors_U_ctl.php";           
        }
        break;
    case"paper":
        if ($act == 'afegir') {
            include "controller/papers/papers_C_ctl.php";
        } elseif ($act == 'eliminar') {
            include "controller/papers/papers_D_ctl.php";           
        }
        break;
        case"obra":
        if ($act == 'afegir') {
            include "controller/obres/obres_C_ctl.php";
        } elseif ($act == 'eliminar') {
            include "controller/obres/obres_D_ctl.php";           
        }
        break;
    case"director":
        if ($act == 'afegir') {
            include "controller/directors/directors_C_ctl.php";
        } elseif ($act == 'eliminar') {
            include "controller/directors/directors_D_ctl.php";           
        }elseif($act== 'modificar'){
            include "controller/directors/directors_U_ctl.php";
        }elseif($act== 'llistar'){
            include "controller/directors/directors_ctl.php";           
        }elseif($act== 'veure'){
            include "controller/directors/director_ctl.php";           
        }else{
          include "controller/directors/directors_ctl.php";           
        }
        break;
        
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>