<?php

include 'controller/metodesPropis/checkSession.php';
include 'controller/metodesPropis/createCookie.php';
include 'controller/metodesPropis/deleteCookie.php';
include 'controller/metodesPropis/getCookie.php';

require_once("config/inici.inc.php");
require_once("controller/metodesPropis/function_AutoLoad.php");

//if (isset($_SESSION['agencia'])) {
//    $agencia = unserialize($_SESSION['agencia']);
//} else {
//    $agencia = New Agencia("Agencia Actors");
//    $agencia->populateAgencia();
//    $_SESSION['agencia'] = serialize($agencia);
//}
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
    case"peticioAJAX";
        if ($act == 'actor'){
            include "controller/dadesActor.php";
        }elseif($act == 'obra'){
            include "controller/dadesObra.php";
        }elseif($act == 'director'){
            include "controller/dadesDirector.php";
        }
        break;
    case"usuari";
        if ($act == 'login') {
            include "controller/login/login_ctl.php";
        } elseif ($act == 'logout') {
            include "controller/login/logout_ctl.php";
        }
        break;

    case"actor":
        if ($act == 'afegir' || $act == 'modificar' || $act == 'llistar' || $act == 'veure' || $act == 'eliminar') {
            include "controller/actors_CRUD_ctl.php";
        } else {
            header("Location: index.php?ctl=actor&act=llistar");
        }
        break;
    case"paper":
        if ($act == 'afegir' || $act == 'modificar' || $act == 'llistar' || $act == 'veure' || $act == 'eliminar') {
            include "controller/papers_CRUD_ctl.php";
        } else {
            header("Location: index.php?ctl=paper&act=llistar");
        }
        break;
    case"obra":
        if ($act == 'afegir' || $act == 'modificar' || $act == 'llistar' || $act == 'veure' || $act == 'eliminar') {
            include "controller/obres_CRUD_ctl.php";
        } else {
            header("Location: index.php?ctl=obra&act=llistar");
        }
        break;

    case"director":
        if ($act == 'afegir' || $act == 'modificar' || $act == 'llistar' || $act == 'veure' || $act == 'eliminar') {
            include "controller/directors_CRUD_ctl.php";
        } else {
            header("Location: index.php?ctl=director&act=llistar");
        }
        break;

    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>