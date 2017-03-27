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

    private $pdo;

    public function __CONSTRUCT() {
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=agencia', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Llistar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM obra");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $obra = new Obra();
                $obra->__SET('id_obra', $r->id);
                $obra->__SET('name', $r->name);
                $obra->__SET('description', $r->description);
                $obra->__SET('type', $r->type);
                $obra->__SET('startDate', $r->startDate);
                $obra->__SET('endDate', $r->endDate);
                $obra->__SET('directorId', $r->directorId);

                $result[] = $obra;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtenir($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM obra WHERE id = ?");
            $stm->execute(array($id));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $obra = new Obra();
            $obra->__SET('id_obra', $r->id);
            $obra->__SET('name', $r->name);
            $obra->__SET('description', $r->description);
            $obra->__SET('type', $r->type);
            $obra->__SET('startDate', $r->startDate);
            $obra->__SET('endDate', $r->endDate);
            $obra->__SET('directorId', $r->directorId);
            return $obra;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM obra WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualitzar(Obra $data) {
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

    public function Insertar(Obra $data) {
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
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>