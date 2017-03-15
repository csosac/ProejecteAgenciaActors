<?php

class Actor
{
    private $id_actor;
    private $nif;
    private $name;
    private $lastname;
    
    function __construct($id_actor, $nif, $name, $lastname, $genre, $photoURL) {
        $this->setId_actor(null);
        $this->setNif($nif);
        $this->setName($name);
        $this->setLastname($lastname);
    }
    
    function getId_actor() {
        return $this->id_actor;
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

    function setId_actor($id_actor) {
        $this->id_actor = $id_actor;
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