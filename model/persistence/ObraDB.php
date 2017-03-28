<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ObraDB {

    public function eliminar($id) {
        try {   
            $con = new db();
            $query = $con->prepare("DELETE FROM obra WHERE id = :id");
            $query->bindParam(":id", $id);
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualitzar($data) {
        try {
            $con = new db();
            $query = $con->prepare("UPDATE obra SET name = :name, description  = :description, type = :type, startDate = :startDate, endDate = :endDate, directorId = :directorId WHERE id = :id");
            
            $query->bindValue(":name", $data->__GET('name'));
            $query->bindValue(":description", $data->__GET('description'));
            $query->bindValue(":type", $data->__GET('type'));
            $query->bindValue(":startDate", $data->__GET('startDate'));
            $query->bindValue(":endDate", $data->__GET('endDate'));
            $query->bindValue(":directorId", $data->__GET('directorId'));
            $query->bindValue(":id", $data->__GET('id_obra'));
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar($data) {
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO obra (name,description,type,startDate,endDate,directorId) 
		        VALUES (:name, :description, :type , :startDate , :endDate , :directorId)");
            $query->bindValue(":name", $data->__GET('name'));
            $query->bindValue(":description", $data->__GET('description'));
            $query->bindValue(":type", $data->__GET('type'));
            $query->bindValue(":startDate", $data->__GET('startDate'));
            $query->bindValue(":endDate", $data->__GET('endDate'));
            $query->bindValue(":directorId", $data->__GET('directorId'));
            $con->consulta($query);
            $id = ($con->lastInsertId());
            return $con->lastInsertId();
            
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>