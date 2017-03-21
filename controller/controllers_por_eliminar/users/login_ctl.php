<?php

$headerTitle = "Iniciar Sessio";
require_once 'controller/metodesPropis/validarUsuari.php';

if (isset($_REQUEST['recordarUsuari'])) {
    createCookie("usuari", $_REQUEST['usuari']);
} else {
    deleteCookie("usuari","");
}

$loginError = false;
if (empty($_REQUEST['pass']) || empty($_REQUEST['usuari'])) $loginError =true;
require_once 'view/header.php';
if (isset($_REQUEST['Submit']) && !empty($_REQUEST['pass']) && !empty($_REQUEST['usuari'])) {
    if (validateUser($_REQUEST['usuari'], $_REQUEST['pass'])) {
        $_SESSION["login"] = true;
        $_SESSION["usuari"] = $_REQUEST['usuari'];
        header("Location: ?ctl=index");
    } else {
        $loginError = true;
        $_SESSION["usuari"] = "";
        session_unset("usuari");
        session_destroy();
        require_once 'view/login.php';
    }
} else {
    require_once 'view/login.php';
}
require_once 'view/footer.php';
?>