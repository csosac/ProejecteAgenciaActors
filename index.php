<?php
include 'controller/metodesPropis/checkSession.php';
include 'controller/metodesPropis/createCookie.php';
include 'controller/metodesPropis/deleteCookie.php';
include 'controller/metodesPropis/getCookie.php';

require_once("config/inici.inc.php");
require_once("controller/metodesPropis/function_AutoLoad.php"); 	
	
if(isset($_SESSION['agencia'])){
	$agencia= unserialize($_SESSION['agencia']);
} else {
	$agencia = New Agencia("Agencia Actors");
	$agencia->populateAgencia(); 
	$_SESSION['agencia'] = serialize($agencia);
}
$ctl = "index";

if (isset($_REQUEST['ctl'])) {
    $ctl = $_REQUEST['ctl'];
    $act = null;
    $param = null;
    if (isset($_REQUEST['act'])) {
        $act = $_REQUEST['act'];
    }
    
}
switch ($ctl) {
//    case"producte";
//        if ($act == 'afegir') {
//            include "controller/productes/afegirProducte_ctl.php";
//        }elseif ($act == 'modificar') {
//            include "controller/productes/modificarProducte_ctl.php";
//        }elseif ($act == 'eliminar') {
//            include "controller/productes/eliminarProducte_ctl.php";
//        }elseif ($act == 'llista') {
//            include "controller/productes/llistaProducte_ctl.php";
//        }else{
//            include "controller/productes/producte_ctl.php";
//        }
//        break;
    default:
        include "controller/" . $ctl . "_ctl.php";
        break;
}
?>