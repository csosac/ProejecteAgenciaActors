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
            $stm = $this->pdo->prepare("DELETE FROM obra WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualitzar(Obra $data) {
        try {
            $sql = "UPDATE obra SET name = ?, description  = ?, type = ? , startDate = ?, endDate = ?, directorId = ? WHERE id = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->__GET('name'),
                $data->__GET('description'),
                $data->__GET('type'),
                $data->__GET('startDate'),
                $data->__GET('endDate'),
                $data->__GET('directorId'),
                $data->__GET('id_obra'))
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar(Obra $data) {
        try {
            $sql = "INSERT INTO obra (name,description,type,startDate,endDate,directorId) 
		        VALUES (?, ?, ? , ? , ? , ?)";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->__GET('name'),
                                $data->__GET('description'),
                                $data->__GET('type'),
                                $data->__GET('startDate'),
                                $data->__GET('endDate'),
                                $data->__GET('directorId'))
            
            );
            return $this->pdo->lastInsertId();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>