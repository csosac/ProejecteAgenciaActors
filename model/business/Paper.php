<?php

class Paper
{
    private $id_paper;
    private $paper;
    private $id_actor;
    private $id_film;
    
    function __construct($id_paper, $paper, $id_actor, $id_film) {
        $this->setId_actor($id_actor);
        $this->setPaper($paper);
        $this->setId_actor($id_actor);
        $this->setId_actor($id_actor);
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

    function getId_film() {
        return $this->id_film;
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

    function setId_film($id_film) {
        $this->id_film = $id_film;
    }


}

?>