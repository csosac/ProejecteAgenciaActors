<?php

include_once("controller/metodesPropis/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class PaperDB{

	public function inserir($role) {		
	
		$query="insert into role values('', '".$llibre->getPaper()."', '".$llibre->getActorId()."', '".$llibre->getObraId() ."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
                
	} 

}    
 ?>