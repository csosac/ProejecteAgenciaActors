<?php

class Director {

    private $id_director;
    private $nif;
    private $name;
    private $lastname;

    function __construct() {
        switch (func_num_args()) {
            case 3:
                $this->setId_director(null);
                $this->setName(func_get_args()[0]);
                $this->setNif(func_get_args()[1]);
                $this->setLastname(func_get_args()[2]);
                break;
            case 4:
                $this->setId_director(func_get_args()[0]);
                $this->setName(func_get_args()[1]);
                $this->setNif(func_get_args()[2]);
                $this->setLastname(func_get_args()[3]);
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

        public function Llistar() {
        $DirectorDB = new DirectorDB();
        return $DirectorDB->Llistar();
    }

    public function Obtenir($id) {
        $DirectorDB = new DirectorDB();
        return $DirectorDB->Obtenir($id);
    }

    public function Eliminar($id) {
        $DirectorDB = new DirectorDB();
        return $DirectorDB->Eliminar($id);
    }

    public function Actualitzar(Director $data) {
        $DirectorDB = new DirectorDB();
        $DirectorDB->Actualitzar($data);
    }
    
    public function Registrar(Director $data) {
        $DirectorDB = new DirectorDB();
        $DirectorDB->Registrar($data);
    }
}

?>