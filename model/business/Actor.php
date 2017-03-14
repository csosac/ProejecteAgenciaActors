<?php
require_once("controller/function_AutoLoad.php"); 

class Actor
{
    private $id_actor;
    private $nif;
    private $name;
    private $lastname;
    private $genre;
    private $photoURL;
    function __construct($id_actor, $nif, $name, $lastname, $genre, $photoURL) {
        $this->setId_actor(null);
        $this->setNif($nif);
        $this->setName($name);
        $this->setLastname($lastname);
        $this->setGenre($genre);
        $this->setPhotoURL($photoURL);
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

    function getGenre() {
        return $this->genre;
    }

    function getPhotoURL() {
        return $this->photoURL;
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

    function setGenre($genre) {
        $this->genre = $genre;
    }

    function setPhotoURL($photoURL) {
        $this->photoURL = $photoURL;
    }


    
    
}

?>
