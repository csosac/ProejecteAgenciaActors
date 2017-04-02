<?php

require_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DirectorDB {

    public function eliminar($id) {
        try {
            $con = new db();
            $query = $con->prepare("DELETE FROM director WHERE id = :id");
            $query->bindValue(":id", $id);
            $con->consulta($query);
            $con=null;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualitzar($data) {
        try {
            $con = new db();
            $sql =$con->prepare("UPDATE director SET nif = :nif, name  = :name, lastname = :lastname, photoUrlDirector = :photoUrlDirector WHERE id = :id");
            $sql->bindValue(":id", $data->__GET('id_director'));
            $sql->bindValue(":nif", $data->__GET('nif'));
            $sql->bindValue(":name", $data->__GET('name'));
            $sql->bindValue(":lastname", $data->__GET('lastname'));
            $sql->bindValue(":photoUrlDirector", $data->__GET('photoUrlDirector'));
            $con->consulta($sql);  
            $con=null;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar($data) {
        try {
            $con = new db();
            $sql = $con->prepare("INSERT INTO director (nif,name,lastname,photoUrlDirector) 
		        VALUES (:nif, :name, :lastname, :photoUrlDirector)");
            $sql->bindValue(":nif", $data->__GET('nif'));
            $sql->bindValue(":name", $data->__GET('name'));
            $sql->bindValue(":lastname", $data->__GET('lastname'));
            $sql->bindValue(":photoUrlDirector", $data->__GET('photoUrlDirector'));
            $con->consulta($sql);
            $con = null;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
