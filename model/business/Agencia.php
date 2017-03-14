<?php
require_once("controller/metodesPropis/function_AutoLoad.php"); 	

class agencia {
    private $nameAgencia;
	private $arrayObres;
	private $arrayActors;
	private $arrayPapers;
	private $arrayDirectors;
        
        function __construct($nameAgencia) {
            $this->setNameAgencia($nameAgencia);
            $this->populateAgencia();
        }
        
        function getNameAgencia() {
            return $this->nameAgencia;
        }

        function getArrayObres() {
            return $this->arrayObres;
        }

        function getArrayActors() {
            return $this->arrayActors;
        }

        function getArrayPapers() {
            return $this->arrayPapers;
        }

        function getArrayDirectors() {
            return $this->arrayDirectors;
        }

        function setNameAgencia($nameAgencia) {
            $this->nameAgencia = $nameAgencia;
        }

        function setArrayObres($arrayObres) {
            $this->arrayObres = $arrayObres;
        }

        function setArrayActors($arrayActors) {
            $this->arrayActors = $arrayActors;
        }

        function setArrayPapers($arrayPapers) {
            $this->arrayPapers = $arrayPapers;
        }

        function setArrayDirectors($arrayDirectors) {
            $this->arrayDirectors = $arrayDirectors;
        }

        function populateAgencia(){
            
        }

        
}
        