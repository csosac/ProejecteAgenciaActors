<?php

class Paper
{
    private $id_paper;
    private $paper;
    private $id_actor;
    private $id_obra;
    
    function __construct($id_paper, $paper, $id_actor, $id_obra) {
        $this->setId_paper($id_actor);
        $this->setPaper($paper);
        $this->setId_actor($id_actor);
        $this->setId_obra($id_actor);
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


}

?>