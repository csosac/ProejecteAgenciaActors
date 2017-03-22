<?php

include_once("controller/metodesPropis/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ActorDB
{
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

            $stm = $this->pdo->prepare("SELECT * FROM actor");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $actor = new Actor();
                $actor->__SET('id_actor', $r->id);
                $actor->__SET('nif', $r->nif);
                $actor->__SET('name', $r->name);
                $actor->__SET('lastname', $r->lastname);
                $actor->__SET('genre', $r->genre);
                $actor->__SET('photoURL', $r->photoURL);

                $result[] = $actor;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtenir($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM actor WHERE id = ?");
            $stm->execute(array($id));
            
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $actor = new Actor();
                $actor->__SET('id_actor', $r->id);
                $actor->__SET('nif', $r->nif);
                $actor->__SET('name', $r->name);
                $actor->__SET('lastname', $r->lastname);
                $actor->__SET('genre', $r->genre);
                $actor->__SET('photoURL', $r->photoURL);
            return $actor;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM actor WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualitzar(Actor $data) {
        try {
            $sql = "UPDATE actor SET nif = ?, name  = ?, lastname = ? , genre = ?, photoURL = ? WHERE id = ?";

            $stm = $this->pdo->prepare($sql);
            $stm->execute(array(
                                $data->__GET('nif'),
                                $data->__GET('name'),
                                $data->__GET('lastname'),
                                $data->__GET('genre'),
                                $data->__GET('photoURL'),
                                $data->__GET('id_actor'))
                    );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Insertar(Actor $data) {
        try {
            $sql = "INSERT INTO director (nif,name,lastname,genre,photoURL) 
		        VALUES (?, ?, ? , ? , ?)";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(                     
                                $data->__GET('nif'),
                                $data->__GET('name'),
                                $data->__GET('lastname'),
                                $data->__GET('genre'),
                                $data->__GET('photoURL'))
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}