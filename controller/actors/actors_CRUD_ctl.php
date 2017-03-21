<?php

include_once("controller/metodesPropis/function_AutoLoad.php");

if (checkSession()) {
    $actorDB = new ActorDB();
    $actor = new Actor();
    $action = "";
    if (isset($_REQUEST['act'])) {
        if ($_REQUEST['act'] == 'llistar') {
            $arrayDeActors = $actorDB->Llistar();
            $headerTitle = "Llista Actors";
            $button = 'Crear';
            require_once 'view/header.php';
            require_once 'view/formularis/actors/actors_view.php';
            require_once 'view/footer.php';
        } else {
            if (isset($_REQUEST['submit'])) {
                if ($_REQUEST['act']=='modificar' && isset($_REQUEST['id'])){
                    $actor=$actorDB->Obtenir($_REQUEST['id']);
                }
                $actor->__SET('name', $_REQUEST['name']);
                $actor->__SET('lastname', $_REQUEST['lastname']);
                $actor->__SET('nif', $_REQUEST['nif']);

                //act = afegir
                if ($_REQUEST['act'] == 'afegir') {
                    $actorDB->Registrar($actor);
                    header("Location: index.php?ctl=actor&act=llistar");
                    //act = modificar
                } elseif ($_REQUEST['act'] == 'modificar') {

                    $actorDB->Actualitzar($actor);
                    header("Location: index.php?ctl=actor&act=llistar");
                }
                //act modificar sense submit
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'modificar') {
                $actor = $actorDB->Obtenir($_REQUEST['id']);
                $action = "?ctl=actor&act=modificar&id=" . $actor->__GET('id_actor');
                $headerTitle = "Modificar Actor";
                $button = 'Modificar';
               //este enseña uno
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'veure'){
                $action = "?ctl=actor&act=llistar";
                $headerTitle = "Actor";
                $actor = $actorDB->Obtenir($_REQUEST['id']);
                $button = 'Tornar';
             //este elimina
            }elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'eliminar') {
                $actorDB->Eliminar($_REQUEST['id']);
                header("Location: index.php?ctl=actor&act=llistar");
                //añade
            } elseif ($_REQUEST['act'] == 'afegir') {
                $action = "?ctl=actor&act=afegir";
                $headerTitle = "Afegir Actor";
                $button = 'Crear';
            }
            require_once 'view/header.php';
            require_once 'view/formularis/actors/actors_CRUD_view.php';
            require_once 'view/footer.php';
        }
    }
} else {
    include "controller/login/login_ctl.php";
}

    