<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
$script = '<script type="text/javascript" src= "view/js/obra.js"></script> <br/> '
        . '<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>'
        . "<script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js\" type=\"text/javascript\"></script>";


$llistar = false;
if (isset($_REQUEST['act'])) {
    $agencia = new Agencia();
    $obra = new Obra();
    if ($_REQUEST['act'] == 'llistar') {
        $llistar = true;
        $arrayDeObres = $agencia->getArrayDeObres();
        $headerTitle = "Llista Obres";
        $button = 'Crear';
        require_once 'view/header.php';
        require_once 'view/formularis/obres/obres_view.php';
        require_once 'view/footer.php';
    } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'veure') {
        $llistar = true;
        $action = "?ctl=obra&act=llistar";
        $headerTitle = "Obra";
        $obra = $agencia->searchObraById($_REQUEST['id']);
        $button = 'Tornar';

        require_once 'view/header.php';
        require_once 'view/formularis/obres/obra_fitxa_view.php';
        require_once 'view/footer.php';

        //este elimina
    }
}
if ($llistar == false) {
    if (checkSession()) {
        $action = "";
        if (isset($_REQUEST['act'])) {
            if (isset($_REQUEST['submit'])) {
                if ($_REQUEST['act'] == 'modificar' && isset($_REQUEST['id'])) {
                    $obra = $agencia->searchObraById($_REQUEST['id']);
                }
                $obra->__SET('name', $_REQUEST['name']);
                $obra->__SET('description', $_REQUEST['description']);
                $obra->__SET('type', $_REQUEST['type']);
                $obra->__SET('startDate', $_REQUEST['startDate']);
                $obra->__SET('endDate', $_REQUEST['endDate']);
                $obra->__SET('directorId', $_REQUEST['directorId']);
                $obra->__SET('photoUrlObra', $_REQUEST['photoUrlObra']);
                if (!$obra->validateObra()) {
                    header("Location: index.php?ctl=error&act=validar");

                    //act = afegir
                } else if ($_REQUEST['act'] == 'afegir') {
                    $id_obra = $obra->insertar($obra);
                    header("Location: index.php?ctl=paper&act=afegir&id_obra=" . $id_obra . "");
                    //act = modificar
                } elseif ($_REQUEST['act'] == 'modificar') {
                    $obra->actualitzar($obra);
                    header("Location: index.php?ctl=obra&act=llistar");
                }
                //act modificar sense submit
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'modificar') {
                $obra = $agencia->searchObraById($_REQUEST['id']);
                $action = "?ctl=obra&act=modificar&id=" . $obra->__GET('id_obra');
                $headerTitle = "Modificar Obra";
                $button = 'Modificar';
                //este enseña uno
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'eliminar') {
                $obra->eliminar($_REQUEST['id']);
                header("Location: index.php?ctl=obra&act=llistar");
                //añade
            } elseif ($_REQUEST['act'] == 'afegir') {
                $action = "?ctl=obra&act=afegir";
                $headerTitle = "Afegir Obra";
                $button = 'Crear';
            }
            require_once 'view/header.php';
            require_once 'view/formularis/obres/obres_CRUD_view.php';
            require_once 'view/footer.php';
        }
    } else {
        include "controller/login/login_ctl.php";
    }
}
    