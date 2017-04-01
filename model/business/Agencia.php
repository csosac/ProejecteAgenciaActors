<?php

class Agencia {

    private $name_agencia;
    private $arrayDeActors;
    private $arrayDeDirectors;
    private $arrayDeObres;
    private $arrayDePapers;
    private $arrayDeUsers;

    public function __construct() {
        $arrayDeActors = array();
        $arrayDeDirectors = array();
        $arrayDeObres = array();
        $arrayDePapers = array();
        $arrayDeUsers = array();
        $this->populateAgencia();
    }

    public function getName_agencia() {
        return $this->name_agencia;
    }

    public function getArrayDeActors() {
        return $this->arrayDeActors;
    }

    public function getArrayDeDirectors() {
        return $this->arrayDeDirectors;
    }

    public function getArrayDeObres() {
        return $this->arrayDeObres;
    }

    public function getArrayDePapers() {
        return $this->arrayDePapers;
    }

    public function getArrayDeUsers() {
        return $this->arrayDeUsers;
    }

    public function setName_agencia($name_agencia) {
        $this->name_agencia = $name_agencia;
    }

    public function setArrayDeActors($arrayDeActors) {
        $this->arrayDeActors = $arrayDeActors;
    }

    public function setArrayDeDirectors($arrayDeDirectors) {
        $this->arrayDeDirectors = $arrayDeDirectors;
    }

    public function setArrayDeObres($arrayDeObres) {
        $this->arrayDeObres = $arrayDeObres;
    }

    public function setArrayDePapers($arrayDePapers) {
        $this->arrayDePapers = $arrayDePapers;
    }

    public function setArrayDeUsers($arrayDeUsers) {
        $this->arrayDeUsers = $arrayDeUsers;
    }

    public function populateAgencia() {
        $agenciadb = new AgenciaDB();
        $this->arrayDeActors = $agenciadb->populateActorsDb();
        $this->arrayDeDirectors = $agenciadb->populateDirectorsDb();
        $this->arrayDeObres = $agenciadb->populateObresDb();
        $this->arrayDePapers = $agenciadb->populatePapersDb();
//        $this->arrayDeUsers = $agenciadb->populateUsersDb();
    }

    public function searchObraById($id) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->searchObraById($id);
    }

    public function searchActorById($id) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->searchActorById($id);
    }

    public function searchDirectorById($id) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->searchDirectorById($id);
    }

    public function searchPaperById($id) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->searchPaperById($id);
    }

    public function getNameActorById($id_actor) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->getNameActorById($id_actor);
    }

    public function getNameObraById($id_obra) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->getNameObraById($id_obra);
    }

    public function getNameDirectorById($id_director) {
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->getNameDirectorById($id_director);
    }
    
    public function getArrayDePapersByIdActor($id_actor){
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->getPapersByIdActor($id_actor);
    }
    
    public function getArrayDeObresByIdDirector($id_director){
        $AgenciaDB = new AgenciaDB();
        return $AgenciaDB->getObresByIdDirector($id_director);
    }

}
