<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once("controller/metodesPropis/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ObraDb{

	public function inserir($director) {

		$query="insert into director values('',".$actor->getName()."', '".$llibre->getDescription()."', '".$llibre->getType() ."', '".$llibre->getStartDate() ."', '".$llibre->getEndDate() ."', '".$llibre->getType() ."','".$llibre->getDirectorId() ."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
                
	} 
}
?>