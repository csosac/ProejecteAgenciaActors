<?php

class Agencia
{
    private $name_agencia;
    private $arrayDeActors;
    private $arrayDeDirectors;
    private $arrayDeObres;
    private $arrayDePapers;
    private $arrayDeUsers;
    
    public function __construct($nameLib) {
        $this->setName_agencia($nameLib);
        $arrayDeActors = array();
	$arrayDeDirectors = array();
        $arrayDeObres = array();
        $arrayDePapers = array();
        $arrayDeUsers = array();
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
        $this->arrayDeUsers = $agenciadb->populateUsersDb();
    }
    
    public function validarUsuari($user,$password){
        $valid = false;
        foreach ($this->arrayDeUsers as $usuari){
            if($usuari->getUsername()==$user && $usuari->getPassword() == $password)
            $valid=true;
        }
        return $valid;
    }
}