<?php

include_once("controller/metodesPropis/function_AutoLoad.php");

if (checkSession()) {
    $directorDB = new DirectorDB();
    $director = new Director();
    $action = "";
    if (isset($_REQUEST['act'])) {
        if ($_REQUEST['act'] == 'llistar') {
            $arrayDeDirectors = $directorDB->Llistar();
            $headerTitle = "Llista Directors";
            $button = 'Crear';
            require_once 'view/header.php';
            require_once 'view/formularis/directors/directors_view.php';
            require_once 'view/footer.php';
        } else {
            if (isset($_REQUEST['submit'])) {
                if ($_REQUEST['act']=='modificar' && isset($_REQUEST['id'])){
                    $director=$directorDB->Obtenir($_REQUEST['id']);
                }
                $director->__SET('name', $_REQUEST['name']);
                $director->__SET('lastname', $_REQUEST['lastname']);
                $director->__SET('nif', $_REQUEST['nif']);

                //act = afegir
                if ($_REQUEST['act'] == 'afegir') {
                    $directorDB->Registrar($director);
                    header("Location: index.php?ctl=director&act=llistar");
                    //act = modificar
                } elseif ($_REQUEST['act'] == 'modificar') {

                    $directorDB->Actualitzar($director);
                    header("Location: index.php?ctl=director&act=llistar");
                }
                //act modificar sense submit
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'modificar') {
                $director = $directorDB->Obtenir($_REQUEST['id']);
                $action = "?ctl=director&act=modificar&id=" . $director->__GET('id_director');
                $headerTitle = "Modificar Director";
                $button = 'Modificar';
               //este enseña uno
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'veure'){
                $action = "?ctl=director&act=llistar";
                $headerTitle = "Director";
                $director = $directorDB->Obtenir($_REQUEST['id']);
                $button = 'Tornar';
             //este elimina
            }elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'eliminar') {
                $directorDB->Eliminar($_REQUEST['id']);
                header("Location: index.php?ctl=director&act=llistar");
                //añade
            } elseif ($_REQUEST['act'] == 'afegir') {
                $action = "?ctl=director&act=afegir";
                $headerTitle = "Afegir Director";
                $button = 'Crear';
            }
            require_once 'view/header.php';
            require_once 'view/formularis/directors/directors_CRUD_view.php';
            require_once 'view/footer.php';
        }
    }
} else {
    include "controller/login/login_ctl.php";
}

    