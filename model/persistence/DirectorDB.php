<?php
require_once("controller/metodesPropis/function_AutoLoad.php"); 		
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class DirectorDB {

    public function eliminar($id) {
        try {
            $con = new db();
            $stm = $con->prepare("DELETE FROM director WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualitzar($data) {
        try {
            $con = new db();
            $sql = "UPDATE director SET nif = ?, name  = ?, lastname = ? WHERE id = ?";

            $stm = $con->prepare($sql);
            $stm->execute(array(
                                $data->__GET('nif'),
                                $data->__GET('name'),
                                $data->__GET('lastname'),
                                $data->__GET('id_director'))
                    );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function insertar($data) {
        try {
            $con = new db();
            $sql = "INSERT INTO director (nif,name,lastname) 
		        VALUES (?, ?, ?)";

            $con->prepare($sql)
                    ->execute(
                            array(
                                $data->__GET('nif'),
                                $data->__GET('name'),
                                $data->__GET('lastname')
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
