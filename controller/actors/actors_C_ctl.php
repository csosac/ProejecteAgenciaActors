<?php

include_once("controller/metodesPropis/function_AutoLoad.php");

//crear actor
if (isset($_REQUEST['submit'])) {
    $nif;
    $name;
    $lastname;
    $genre;
    $foto;
    if (isset($_REQUEST['nif'])) {
        $nif = $_REQUEST['nif'];
    }
    if (isset($_REQUEST['name'])) {
        $nom = $_REQUEST['name'];
    }
    if (isset($_REQUEST['lastname'])) {
        $lastname = $_REQUEST['lastname'];
    }
    if (isset($_REQUEST['genre'])) {
        $genre = $_REQUEST['genre'];
    }
    if (isset($_REQUEST['photoURL'])) {
        $foto = $_REQUEST['photoURL'];
    }

    if ($name != null && $lastname != null && $nif != null && $genre != null && $foto != null) {
        $actor = new Actor($nif, $name, $lastname, $genre, $foto);
        $db = new ActorDB();
        $db->inserirActor($actor);
    }
}
if (checkSession()) {
    $headerTitle = "Afegir Actor";
    require_once 'view/header.php';
    require_once 'view/formularis/actors/actors_C_view.php';
    require_once 'view/footer.php';
} else {
    include "controller/login/login_ctl.php";
}
?>