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
        
        function __construct() {
        switch (func_num_args()) {
            case 6:
                $this->setId_obra(null);
                $this->setName(func_get_args()[0]);
                $this->setDescription(func_get_args()[1]);
                $this->setType(func_get_args()[2]);
                $this->setStartDate(func_get_args()[3]);
                $this->setEndDate(func_get_args()[4]);
                $this->setDirectorId(func_get_args()[5]);
                break;
            case 7:
                $this->setId_obra(func_get_args()[0]);
                $this->setName(func_get_args()[1]);
                $this->setDescription(func_get_args()[2]);
                $this->setType(func_get_args()[3]);
                $this->setStartDate(func_get_args()[4]);
                $this->setEndDate(func_get_args()[5]);
                $this->setDirectorId(func_get_args()[6]);
                break;
        }
    }
 
    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        return $this->$k = $v;
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