<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DirectorDB {

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

            $stm = $this->pdo->prepare("SELECT * FROM director");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $director = new Director();

                $director->__SET('id_director', $r->id);
                $director->__SET('nif', $r->nif);
                $director->__SET('name', $r->name);
                $director->__SET('lastname', $r->lastname);

                $result[] = $director;
            }
            return $result;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtenir($id) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM director WHERE id = ?");
            $stm->execute(array($id));
            
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $director = new Director();

            $director->__SET('id_director', $r->id);
            $director->__SET('nif', $r->nif);
            $director->__SET('name', $r->name);
            $director->__SET('lastname', $r->lastname);
            

            return $director;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id) {
        try {
            $stm = $this->pdo->prepare("DELETE FROM director WHERE id = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualitzar(Director $data) {
        try {
            $sql = "UPDATE director SET nif = ?, name  = ?, lastname = ? WHERE id = ?";

            $stm = $this->pdo->prepare($sql);
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

//    public function inserir($director) {
//        $query = "insert into director values('','" . $director->getNif() . "', '" . $director->getName() . "', '" . $director->getLastname() . "');";
//        $con = new db();
//        $con->consulta($query);
//        $con->close();
//    }

    public function Registrar(Director $data) {
        try {
            $sql = "INSERT INTO director (nif,name,lastname) 
		        VALUES (?, ?, ?)";

            $this->pdo->prepare($sql)
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
