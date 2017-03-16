<?php
require_once 'model/business/Actor.class.php';
require_once 'model/business/Paper.class.php';
session_start();
$ProductesDAO = new ProductesDAO();
$TipusDAO = new TipusDAO();

$tipo = null;
$limite = null;
if (isset($_REQUEST['estudis'])) {
    $estudis = $_REQUEST['estudis'];
}
if (isset($_REQUEST['quantitat'])) {
    $limite = $_REQUEST['quantitat'];
}

$modify = true;
$lProductes = $_SESSION['llistaProductesSes'];
$productesArray = $ProductesDAO->relacio($tipo);
$llistaTitle = "Resultats de Productes";
$headerTitle = "Productes";
require_once 'view/header.php';
require_once 'view/viewCRUDproductes/listaProductos.php';
require_once 'view/footer.php';
?>