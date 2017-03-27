<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
$script ='<script type="text/javascript" src= "view/js/papers.js"></script>';
if (checkSession()) {
    $paper = new Paper();
    $action = "";
    if (isset($_REQUEST['act'])) {
        if ($_REQUEST['act'] == 'llistar') {
            
            $arrayDePapers = $paper->Llistar();
            $headerTitle = "Llista Papers";
            $button = 'Crear';
            require_once 'view/header.php';
            require_once 'view/formularis/papers/papers_view.php';
            require_once 'view/footer.php';
        } else {
            if (isset($_REQUEST['submit'])) {
                if ($_REQUEST['act']=='modificar' && isset($_REQUEST['id'])){
                    $paper=$paper->Obtenir($_REQUEST['id']);
                }
                $paper->__SET('paper', $_REQUEST['paper']);
                $paper->__SET('id_actor', $_REQUEST['id_actor']);
                $paper->__SET('id_obra', $_REQUEST['id_obra']);

                //act = afegir
                if ($_REQUEST['act'] == 'afegir') {
                    $paper->Registrar($paper);
                    header("Location: index.php?ctl=paper&act=afegir&id_obra".$paper->__GET('id_obra'));
                    //act = modificar
                } elseif ($_REQUEST['act'] == 'modificar') {

                    $paper->Actualitzar($paper);
                    header("Location: index.php?ctl=paper&act=llistar");
                }
                //act modificar sense submit
            } elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'modificar') {
                $paper = $paper->Obtenir($_REQUEST['id']);
                $action = "?ctl=paper&act=modificar&id=" . $paper->__GET('id_paper');
                $headerTitle = "Modificar Paper";
                $button = 'Modificar';
               //este enseña uno
            } elseif(isset($_REQUEST['id_obra']) && $_REQUEST['act'] == 'afegir'){
                $action = "?ctl=paper&act=afegir";
                $headerTitle = "Afegir Paper";
                $button = 'Crear';
                
            }elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'veure'){
                $action = "?ctl=paper&act=llistar";
                $headerTitle = "Paper";
                $paper = $paper->Obtenir($_REQUEST['id']);
                $button = 'Tornar';
             //este elimina
            }elseif (isset($_REQUEST['id']) && $_REQUEST['act'] == 'eliminar') {
                $paper->Eliminar($_REQUEST['id']);
                header("Location: index.php?ctl=paper&act=llistar");
                //añade
            } elseif ($_REQUEST['act'] == 'afegir') {
                $action = "?ctl=paper&act=afegir";
                $headerTitle = "Afegir Paper";
                $button = 'Crear';
            }
            require_once 'view/header.php';
            require_once 'view/formularis/papers/papers_CRUD_view.php';
            require_once 'view/footer.php';
        }
    }
} else {
    include "controller/login/login_ctl.php";
}


    