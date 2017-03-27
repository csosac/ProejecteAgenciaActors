<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class PaperDB {

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

            $stm = $this->pdo->prepare("SELECT * FROM paper");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $paper = new Paper();

                $paper->__SET('id_paper', $r->id);
                $paper->__SET('paper', $r->paper);
                $paper->__SET('id_actor', $r->actorId);
                $paper->__SET('id_obra', $r->obraId);

                $result[] = $paper;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtenir($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM paper WHERE id = ?");
            $stm->execute(array($id));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $paper = new Paper();

            $paper->__SET('id_paper', $r->id);
            $paper->__SET('paper', $r->paper);
            $paper->__SET('id_actor', $r->actorId);
            $paper->__SET('id_obra', $r->obraId);


            return $paper;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM paper WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualitzar(Paper $data) {
        try {
            $sql = "UPDATE paper SET nif = ?, name  = ?, lastname = ? WHERE id = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                $data->__GET('id_paper'),
                $data->__GET('paper'),
                $data->__GET('id_actor'),
                $data->__GET('id_obra'))
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Paper $data) {
        try {
            $sql = "INSERT INTO paper (paper,id_actor,id_obra) 
		        VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->__GET('paper'),
                                $data->__GET('id_actor'),
                                $data->__GET('id_obra')
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>