<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ActorDB {

    public function Eliminar($id) {
        try {
            $con = new db();
            $query = $con->prepare("DELETE FROM actor WHERE id = :id");
            $query->bindParam(":id", $id);
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualitzar(Actor $data) {
        try {
            $con = new db();
            $query = $con->prepare("UPDATE actor SET nif = :nif, name  = :name, lastname = :lastname , genre = :genre, photoURL = :photoURL WHERE id = :id");
            $query->bindValue(":id", $data->__GET('id_actor'));
            $query->bindValue(":nif", $data->__GET('nif'));
            $query->bindValue(":name", $data->__GET('name'));
            $query->bindValue(":lastname", $data->__GET('lastname'));
            $query->bindValue(":genre", $data->__GET('genre'));
            $query->bindValue(":photoURL", $data->__GET('photoURL'));
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Insertar($data) {
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO actor (nif,name,lastname,genre,photoURL) VALUES (:nif, :name, :lastname, :genre, :photoURL)");
            $query->bindValue(":nif", $data->__GET('nif'));
            $query->bindValue(":name", $data->__GET('name'));
            $query->bindValue(":lastname", $data->__GET('lastname'));
            $query->bindValue(":genre", $data->__GET('genre'));
            $query->bindValue(":photoURL", $data->__GET('photoURL'));
            $con->consulta($query);
            $con = null;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
