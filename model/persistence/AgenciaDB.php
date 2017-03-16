<?php
require_once("controller/metodesPropis/function_AutoLoad.php"); 		
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class AgenciaDB
{
    private $arrayDeActors;
    private $arrayDeDirectors;
    private $arrayDeObres;
    private $arrayDePapers;
    private $arrayDeUsers;
    
    public function __construct() {
        $arrayDeActors = array();
	$arrayDeDirectors = array();
        $arrayDeObres = array();
        $arrayDePapers = array();
        $arrayDeUsers = array();
    }
    
    public function populateActorsDb() {
        $query="SELECT * FROM actor;";
            $con = new db();
	    $arrayDeActors = $con->consultaActors($query);		
	    $con->close();
	    return $arrayDeActors;				
    }
    
    public function populateDirectorsDb() {
        $query="SELECT * FROM director;";
            $con = new db();
	    $arrayDeDirectors = $con->consultaDirectors($query);		
	    $con->close();
	    return $arrayDeDirectors;				
    }
    public function populateObresDb() {
        $query="SELECT * FROM obra;";
            $con = new db();
	    $arrayDeObres = $con->consultaObres($query);		
	    $con->close();
	    return $arrayDeObres;				
    }
    public function populatePapersDb() {
        $query="SELECT * FROM paper;";
            $con = new db();
	    $arrayDePapers = $con->consultaPapers($query);		
	    $con->close();
	    return $arrayDePapers;				
    }
    public function populateUsersDb() {
        $query="SELECT * FROM user;";
            $con = new db();
	    $arrayDeUsers = $con->consultaUsers($query);		
	    $con->close();
	    return $arrayDeUsers;				
    }
}
?>

