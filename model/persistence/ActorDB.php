<?php

include_once("controller/metodesPropis/function_AutoLoad.php"); 	
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class ActorDao
{
    public function inserirActor($actor)
    {
        $query="insert into actor values('', '".$actor->getNif()."', '".$actor->getName()."', '".$actor->getLastname()."', '".$actor->getGenre()."', '".$actor->getPhotoURL() ."');";				
        $con = new db();
        $con->consulta($query);
	$con->close();
    }
}