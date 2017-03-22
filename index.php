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
        if ($act == 'afegir'||$act== 'modificar' || $act== 'llistar'|| $act== 'veure'||$act == 'eliminar') {
            include "controller/actors/actors_CRUD_ctl.php";
        }else {
            header("Location: index.php?ctl=actor&act=llistar");
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
        if ($act == 'afegir'||$act== 'modificar' || $act== 'llistar'|| $act== 'veure'||$act == 'eliminar') {
            include "controller/directors/directors_CRUD_ctl.php";
        }else {
            header("Location: index.php?ctl=director&act=llistar");
        }
        break;
        
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>