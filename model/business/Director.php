<?php

class Director
{
    private $id_director;
    private $nif;
    private $name;
    private $lastname;
    
    function __construct($id_actor, $nif, $name, $lastname, $genre, $photoURL) {
        $this->setId_actor(null);
        $this->setNif($nif);
        $this->setName($name);
        $this->setLastname($lastname);
    }
    
    function getId_director() {
        return $this->id_director;
    }

    
    function getNif() {
        return $this->nif;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setId_director($id_director) {
        $this->id_director = $id_director;
    }

    function setNif($nif) {
        $this->nif = $nif;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }


}
?>