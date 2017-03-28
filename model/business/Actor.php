<?php

class Actor {

    private $id_actor;
    private $nif;
    private $name;
    private $lastname;
    private $genre;
    private $photoURL;

    function __construct() {
        switch (func_num_args()) {
            case 5:
                $this->setId_actor(null);
                $this->setNif(func_get_args()[0]);
                $this->setName(func_get_args()[1]);
                $this->setLastname(func_get_args()[2]);
                $this->setGenre(func_get_args()[3]);
                $this->setPhotoURL(func_get_args()[4]);
                break;
            case 6:
                $this->setId_actor(func_get_args()[0]);
                $this->setNif(func_get_args()[1]);
                $this->setName(func_get_args()[2]);
                $this->setLastname(func_get_args()[3]);
                $this->setGenre(func_get_args()[4]);
                $this->setPhotoURL(func_get_args()[5]);
                break;
        }
    }

    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        return $this->$k = $v;
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

    public function eliminar($id) {
        $ActorDB = new ActorDB();
        return $ActorDB->eliminar($id);
    }

    public function actualitzar(Actor $data) {
        $ActorDB = new ActorDB();
        $ActorDB->actualitzar($data);
    }
    
    public function insertar() {
        $ActorDB = new ActorDB();
        $ActorDB->insertar($this);
    }
}

?>
