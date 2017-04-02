<?php

require_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class AgenciaDB {

    public function populateActorsDb() {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM actor;");
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {
            $act = new Actor();
            $act->__SET('id_actor', $row['id']);
            $act->__SET('nif', $row['nif']);
            $act->__SET('name', $row['name']);
            $act->__SET('lastname', $row['lastname']);
            $act->__SET('genre', $row['genre']);
            $act->__SET('photoURL', $row['photoURL']);

            array_push($arrayDeObjectes, $act);
        }


        $con = null;
        return $arrayDeObjectes;
    }

    public function populateDirectorsDb() {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM director;");
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $director = new Director();

            $director->__SET('id_director', $row['id']);
            $director->__SET('nif', $row['nif']);
            $director->__SET('name', $row['name']);
            $director->__SET('lastname', $row['lastname']);

            array_push($arrayDeObjectes, $director);
        }

        $con = null;
        return $arrayDeObjectes;
    }

    public function searchDirectorById($id) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM director WHERE id = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);

        $director = new Director();
        foreach ($result as $row) {
            $director->__SET('id_director', $row['id']);
            $director->__SET('nif', $row['nif']);
            $director->__SET('name', $row['name']);
            $director->__SET('lastname', $row['lastname']);
        }
        $con = null;
        return $director;
    }

    public function searchActorById($id) {
        $con = new db();
        $query = $con->prepare("SELECT * FROM actor WHERE id = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);

        $actor = new Actor();
        foreach ($result as $row) {
            $actor->__SET('id_actor', $row['id']);
            $actor->__SET('nif', $row['nif']);
            $actor->__SET('name', $row['name']);
            $actor->__SET('lastname', $row['lastname']);
            $actor->__SET('genre', $row['genre']);
            $actor->__SET('photoURL', $row['photoURL']);
        }
        $con = null;
        return $actor;
    }

    public function populateObresDb() {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM obra;");
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $obra = new Obra();

            $obra->__SET('id_obra', $row['id']);
            $obra->__SET('name', $row['name']);
            $obra->__SET('description', $row['description']);
            $obra->__SET('type', $row['type']);
            $obra->__SET('startDate', $row['startDate']);
            $obra->__SET('endDate', $row['endDate']);
            $obra->__SET('directorId', $row['directorId']);
            $obra->__SET('photoUrlObra', $row['photoUrlObra']);

            array_push($arrayDeObjectes, $obra);
        }

        $con = null;
        return $arrayDeObjectes;
    }

    public function searchObraById($id) {
        $arrayDeObjectes = array();//I això perquè serveix???
        $con = new db();
        $query = $con->prepare("SELECT * FROM obra WHERE id = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);
        
        $obra = new Obra();
        foreach ($result as $row) {

            $obra->__SET('id_obra', $row['id']);
            $obra->__SET('name', $row['name']);
            $obra->__SET('description', $row['description']);
            $obra->__SET('type', $row['type']);
            $obra->__SET('startDate', $row['startDate']);
            $obra->__SET('endDate', $row['endDate']);
            $obra->__SET('directorId', $row['directorId']);
            $obra->__SET('photoUrlObra', $row['photoUrlObra']);
        }

        $con = null;
        return $obra;
    }

    public function searchPaperById($id) {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM paper WHERE id = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $paper = new Paper();

            $paper->__SET('id_paper', $row['id']);
            $paper->__SET('paper', $row['paper']);
            $paper->__SET('id_actor', $row['actorId']);
            $paper->__SET('id_obra', $row['obraId']);
        }

        $con = null;
        return $paper;
    }

    public function populatePapersDb() {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM paper;");
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $paper = new Paper();

            $paper->__SET('id_paper', $row['id']);
            $paper->__SET('paper', $row['paper']);
            $paper->__SET('id_actor', $row['actorId']);
            $paper->__SET('id_obra', $row['obraId']);
            array_push($arrayDeObjectes, $paper);
        }

        $con = null;
        return $arrayDeObjectes;
    }

    public function populateUsersDb() {
        $query = "SELECT * FROM user;";
        $con = new db();
        $arrayDeUsers = $con->consultaUsers($query);
        $con->close();
        return $arrayDeUsers;
    }

    public function getNameActorById($id) {
        return $this->searchActorById($id)->__GET('name') . " " . $this->searchActorById($id)->__GET('lastname');
    }

    public function getNameObraById($id) {
        return $this->searchObraById($id)->__GET('name');
    }

    public function getNameDirectorById($id) {
        return $this->searchDirectorById($id)->__GET('name') . " " . $this->searchDirectorById($id)->__GET('lastname');
    }

    public function getPapersByIdActor($id) {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM paper WHERE actorId = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $paper = new Paper();

            $paper->__SET('id_paper', $row['id']);
            $paper->__SET('paper', $row['paper']);
            $paper->__SET('id_actor', $row['actorId']);
            $paper->__SET('id_obra', $row['obraId']);
            array_push($arrayDeObjectes, $paper);
        }

        $con = null;
        return $arrayDeObjectes;
    }

    public function getObresByIdDirector($id) {
        $arrayDeObjectes = array();
        $con = new db();
        $query = $con->prepare("SELECT * FROM obra WHERE directorId = :id");
        $query->bindValue(":id", $id);
        $result = $con->consultarObjectes($query);

        foreach ($result as $row) {

            $obra = new Obra();

            $obra->__SET('id_obra', $row['id']);
            $obra->__SET('name', $row['name']);
            $obra->__SET('description', $row['description']);
            $obra->__SET('type', $row['type']);
            $obra->__SET('startDate', $row['startDate']);
            $obra->__SET('endDate', $row['endDate']);
            $obra->__SET('directorId', $row['directorId']);
            array_push($arrayDeObjectes, $obra);
        }

        $con = null;
        return $arrayDeObjectes;
    }

}
?>

