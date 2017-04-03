<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class PaperDB {
    
    public function eliminar($id) {
        try {
            $con = new db();
            $query = $con->prepare("DELETE FROM paper WHERE id = :id");
            $query->bindValue(":id", $id);
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function actualitzar($data) {
        try {
            $con = new db();
            $query = $con->prepare("UPDATE paper SET paper = :paper, actorId  = :actorId, obraId = :obraId, tipusPaper = :tipusPaper  WHERE id = :id");
  
            $query->bindValue(":paper", $data->__GET('paper'));
            $query->bindValue(":actorId", $data->__GET('id_actor'));
            $query->bindValue(":obraId", $data->__GET('id_obra'));
            $query->bindValue(":tipusPaper", $data->__GET('tipusPaper'));
            $con->consulta($query);
        } catch (Exception $e) {
            die($e->getMessage());
     
        }
    }
    
        public function insertar($data) {
        try {
            $con = new db();
            $query = $con->prepare("INSERT INTO paper (paper,actorId,obraId,tipusPaper) VALUES (:paper, :actorId, :obraId, :tipusPaper)");
            $query->bindValue(":paper", $data->__GET('paper'));
            $query->bindValue(":actorId", $data->__GET('id_actor'));
            $query->bindValue(":obraId", $data->__GET('id_obra'));
            $query->bindValue(":tipusPaper", $data->__GET('tipusPaper'));
            $con->consulta($query);
            $con = null;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    

}

?>