<?php

function validateUser($_usuari, $clau) {
    $usuariValidat = false;
    $passValidat = false;
    $validat = false;

    require_once 'model/Users.class.php';

    $usuariValidat = false;

    $UsersDAO = new UsersDAO();

    return $UsersDAO->comprobarUser($_usuari,$clau);
}
