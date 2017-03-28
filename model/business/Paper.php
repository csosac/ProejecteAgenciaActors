<?php

class Paper {

    private $id_paper;
    private $paper;
    private $id_actor;
    private $id_obra;

    function __construct() {
        switch (func_num_args()) {
            case 3:
                $this->setId_paper(null);
                $this->setPaper(func_get_args()[0]);
                $this->setId_actor(func_get_args()[1]);
                $this->setId_obra(func_get_args()[2]);
                break;
            case 4:
                $this->setId_paper(func_get_args()[0]);
                $this->setPaper(func_get_args()[1]);
                $this->setId_actor(func_get_args()[2]);
                $this->setId_obra(func_get_args()[3]);

                break;
        }
    }

    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        return $this->$k = $v;
    }

    function getId_paper() {
        return $this->id_paper;
    }

    function getPaper() {
        return $this->paper;
    }

    function getId_actor() {
        return $this->id_actor;
    }

    function getId_obra() {
        return $this->id_obra;
    }

    function setId_paper($id_paper) {
        $this->id_paper = $id_paper;
    }

    function setPaper($paper) {
        $this->paper = $paper;
    }

    function setId_actor($id_actor) {
        $this->id_actor = $id_actor;
    }

    function setId_obra($id_obra) {
        $this->id_obra = $id_obra;
    }

    public function Llistar() {
        $PaperDB = new PaperDB();
        return $PaperDB->Llistar();
    }

    public function Obtenir($id) {
        $PaperDB = new PaperDB();
        return $PaperDB->Obtenir($id);
    }

    public function Eliminar($id) {
        $PaperDB = new PaperDB();
        return $PaperDB->Eliminar($id);
    }

    public function Actualitzar(Paper $data) {
        $PaperDB = new PaperDB();
        $PaperDB->Actualitzar($data);
    }

    public function Insertar(Paper $data) {
        $PaperDB = new PaperDB();
        $PaperDB->Insertar($data);
    }

    public function getActorById($id_actor) {
        $ActorDB = new ActorDB();
        return $ActorDB->Obtenir($id_actor);
    }

    public function getNameActorById($id_actor) {
        $ActorDB = new ActorDB();
        $actor = $ActorDB->Obtenir($id_actor);
        return $actor->__GET('name') . " " . $actor->__GET('lastname');
    }

    public function getNameObraById($id_obra) {
        $ObraDB = new ObraDB();
        return $ObraDB->Obtenir($id_obra)->__GET('name');
    }

}

?>