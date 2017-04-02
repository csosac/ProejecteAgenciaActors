<?php

class Director {

    private $id_director;
    private $nif;
    private $name;
    private $lastname;
    private $photoUrlDirector;

    function __construct() {
        switch (func_num_args()) {
            case 4:
                $this->setId_director(null);
                $this->setName(func_get_args()[0]);
                $this->setNif(func_get_args()[1]);
                $this->setLastname(func_get_args()[2]);
                $this->setPhotoUrlDirector(func_get_arg(3));
                break;
            case 5:
                $this->setId_director(func_get_args()[0]);
                $this->setName(func_get_args()[1]);
                $this->setNif(func_get_args()[2]);
                $this->setLastname(func_get_args()[3]);
                $this->setPhotoUrlDirector(func_get_arg(4));
                break;
        }
    }

    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        return $this->$k = $v;
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

    function getPhotoUrlDirector() {
        return $this->photoUrlDirector;
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

    function setPhotoUrlDirector($photoUrlDirector) {
        $this->photoUrlDirector = $photoUrlDirector;
    }

        public function eliminar($id) {
        $DirectorDB = new DirectorDB();
        return $DirectorDB->eliminar($id);
    }

    public function actualitzar($data) {
        $DirectorDB = new DirectorDB();
        $DirectorDB->actualitzar($data);
    }

    public function insertar($data) {
        $DirectorDB = new DirectorDB();
        $DirectorDB->insertar($data);
    }

    function validateNif($nif) {
        $valid = True;

        $letra = substr($nif, -1);
        $numeros = substr($nif, 0, -1);
        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros % 23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8) {
            $valid = True;
        } else {
            $valid = False;
        }

        return $valid;
    }

    function validateName($name) {
        $txt = trim($name);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }

    function validateLastname($lastname) {
        $txt = trim($lastname);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }
    
    function validatePhotoUrDirector($photoURL) {
        $txt = trim($photoURL);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }

    public function validateDirector() {

        if ($this->validateNif($this->__GET("nif")) == True && $this->validateName($this->__GET("name")) == True && $this->validateLastname($this->__GET("lastname")) == True && $this->validatePhotoUrDirector($this->__GET("photoUrlDirector")) == True) {

            return True;
        } else {
            return False;
        }
    }

}

?>