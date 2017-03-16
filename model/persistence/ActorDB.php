<?php

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