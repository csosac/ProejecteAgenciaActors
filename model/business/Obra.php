<?php

class Obra
{
    private $id_obra;
    private $name;
    private $description;
    private $type;
    private $startDate;
    private $endDate;
    private $directorId;
    
    function __construct($id_obra, $name, $description, $type, $startDate, $endDate, $directorId) {
        $this->setId_obra($id_obra);
        $this->setName($name);
        $this->setDescription($description);
        $this->setType($type);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setDirectorId($directorId);
    }

    
    function getId_obra() {
        return $this->id_obra;
    }

    function getName() {
        return $this->name;
    }

    function getDescription() {
        return $this->description;
    }

    function getType() {
        return $this->type;
    }

    function getStartDate() {
        return $this->startDate;
    }

    function getEndDate() {
        return $this->endDate;
    }

    function getDirectorId() {
        return $this->directorId;
    }

    function setId_obra($id_obra) {
        $this->id_obra = $id_obra;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setStartDate($startDate) {
        $this->startDate = $startDate;
    }

    function setEndDate($endDate) {
        $this->endDate = $endDate;
    }

    function setDirectorId($directorId) {
        $this->directorId = $directorId;
    }


    
}
?>