<?php

$script = "<script type=\"text/javascript\" src= \"view/js/director.js\"></script> <br/>"
        . "<script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js\" type=\"text/javascript\"></script>";

include_once("controller/metodesPropis/function_AutoLoad.php");
$llistar = false;
if (isset($_REQUEST['act'])) {
    $agencia = new Agencia();
    $director = new Director();
    if ($_REQUEST['act'] == 'llistar') {
        $llistar = true;
        $arrayDeDirectors = $agencia->getArrayDeDirectors();
        $headerTitle = "Llista Directors";
        $button = 'Crear';
        require_once 'view/header.php';
        require_once 'view/formularis/directors/directors_view.php';
        require_once 'view/footer.php';
    } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'veure') {
        $llistar = true;
        $action = "?ctl=director&act=llistar";
        $headerTitle = "Director";
        $obres = $agencia->getArrayDeObresByIdDirector($_REQUEST['id']);
        $director = $agencia->searchDirectorById($_REQUEST['id']);
        $button = 'Tornar';
        require_once 'view/header.php';
        require_once 'view/formularis/directors/directors_fitxa_view.php';
        require_once 'view/footer.php';
    }

    
}
if ($llistar == false) {
    if (checkSession()) {
        $action = "";
        if (isset($_REQUEST['act'])) {
            if (isset($_REQUEST['submit'])) {
                if ($_REQUEST['act'] == 'modificar' && isset($_REQUEST['id'])) {
                    $director = $agencia->searchDirectorById($_REQUEST['id']);
                }

                $director->__SET('name', $_REQUEST['name']);
                $director->__SET('lastname', $_REQUEST['lastname']);
                $director->__SET('nif', $_REQUEST['nif']);
                $director->__SET('photoUrlDirector', $_REQUEST['photoUrlDirector']);
                // validar
                if (!$director->validateDirector()) {
                    header("Location: index.php?ctl=error&act=validar");

                    //act = afegir
                } else if ($_REQUEST['act'] == 'afegir') {

                    $director->insertar($director);
                    header("Location: index.php?ctl=director&act=llistar");

                    //act = modificar
                } elseif ($_REQUEST['act'] == 'modificar') {

                    $director->actualitzar($director);
                    header("Location: index.php?ctl=director&act=llistar");
                }
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'modificar') {
                $director = $agencia->searchDirectorById($_REQUEST['id']);
                $action = "?ctl=director&act=modificar&id=" . $director->__GET('id_director');
                $headerTitle = "Modificar Director";
                $button = 'Modificar';
                require_once 'view/header.php';
                require_once 'view/formularis/directors/directors_CRUD_view.php';
                //este enseña uno
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'eliminar') {
                $director->eliminar($_REQUEST['id']);
                header("Location: index.php?ctl=director&act=llistar");
                //añade
            } elseif ($_REQUEST['act'] == 'afegir') {
                $action = "?ctl=director&act=afegir";
                $headerTitle = "Afegir Director";
                $button = 'Crear';
                require_once 'view/header.php';
                require_once 'view/formularis/directors/directors_CRUD_view.php';
            }

            require_once 'view/footer.php';
        }
    } else {
        include "controller/login/login_ctl.php";
    }
}

        