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
                $this->setObraId(func_get_args()[5]);
                break;
            case 7:
                $this->setId_obra(func_get_args()[0]);
                $this->setName(func_get_args()[1]);
                $this->setDescription(func_get_args()[2]);
                $this->setType(func_get_args()[3]);
                $this->setStartDate(func_get_args()[4]);
                $this->setEndDate(func_get_args()[5]);
                $this->setObraId(func_get_args()[6]);
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

    function getObraId() {
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

    function setObraId($directorId) {
        $this->directorId = $directorId;
    }

    public function eliminar($id) {
        $ObraDB = new ObraDB();
        return $ObraDB->eliminar($id);
    }

    public function actualitzar(Obra $data) {
        $ObraDB = new ObraDB();
        $ObraDB->actualitzar($data);
    }
    
    public function insertar(Obra $data) {
        $ObraDB = new ObraDB();
        return $ObraDB->insertar($data);
    }
 
    function validateName($name) {
        $txt = trim($name);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }
    function validateDescription($description) {
        $txt = trim($description);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }

    function validateType($type) {
        $txt = trim($type);
        $valid = False;

        if (strlen($txt) >= 2) {
            $valid = True;
        }

        return $valid;
    }
function validateDirectorId($directorId) {       
        $valid = False;

        if ($directorId != null) {
            $valid = True;
        }

        return $valid;
    }
    function validateEndDate($endDate){
        
        
    }
    function validateStartDate($startDate){}


    public function validateDirector() {

        if ($this->validateDirectorId($this->__GET("directorId")) == True && $this->validateName($this->__GET("name")) == True && $this->validateDescription($this->__GET("description")) == True && $this->validateType($this->__GET("type")) == True && $this->validateEndDate($this->__GET("endDate")) == True && $this->validateStartDate($this->__GET("startDate")) == True) {

            return True;
        } else {
            return False;
        }
    }

}
?>