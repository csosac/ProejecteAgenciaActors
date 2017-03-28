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


    public function eliminar($id) {
        $PaperDB = new PaperDB();
        return $PaperDB->eliminar($id);
    }

    public function actualitzar(Paper $data) {
        $PaperDB = new PaperDB();
        $PaperDB->actualitzar($data);
    }
    
    public function insertar() {
        $PaperDB = new PaperDB();
        $PaperDB->insertar($this);
    }
}

?>