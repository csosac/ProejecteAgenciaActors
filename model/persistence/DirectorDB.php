<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class DirectorDB{

	public function inserir($director) {	
		$query="insert into director values('',".$actor->getNif()."', '".$llibre->getName()."', '".$llibre->getLastname() ."');";				
		$con = new db();
		$con->consulta($query);
		$con->close();
                
	} 


}  