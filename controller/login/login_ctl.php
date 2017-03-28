<?php

require_once("controller/metodesPropis/function_AutoLoad.php");
$headerTitle = "Iniciar Sessio";

if (isset($_REQUEST['recordarUsuari'])) {
    createCookie("usuari", $_REQUEST['username']);
} else {
    deleteCookie("usuari", "");
}

//if (isset($_SESSION['agencia'])) {
//    $agencia = unserialize($_SESSION['agencia']);
//} else {
//    $agencia = New Agencia("Agencia Actors");
//    $agencia->populateAgencia();
//    $_SESSION['agencia'] = serialize($agencia);
//}
$user = new User();

$loginError = false;
if (empty($_REQUEST['pass']) || empty($_REQUEST['username']))
    $loginError = true;
if (isset($_REQUEST['Submit']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['username'])) {
    $user =$user->getUserByUsername($_REQUEST['username']);
    if ($user->validarUsuari($_REQUEST['username'], $_REQUEST['pass'])) {
        $_SESSION["login"] = true;
        $_SESSION["usuari"] = $_REQUEST['username'];
        header("Location: ?ctl=index");
    } else {
        $loginError = true;
        $_SESSION["usuari"] = "";
        session_unset("usuari");
        session_destroy();
        require_once 'view/header.php';
        require_once 'view/login.php';
    }
} else {
    require_once 'view/header.php';
    require_once 'view/login.php';
    
}
require_once 'view/footer.php';
?>