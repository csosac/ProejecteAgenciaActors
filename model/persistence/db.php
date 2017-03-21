<?php
require_once("interface_db.php");

class db implements interface_db{
    private $server;
    private $username;
    private $password;
    private $dbname;
    private $link;
	
	
    public function __construct(){
	$this->setServer($GLOBALS['server']);
	$this->setUsername($GLOBALS['USER']);
	$this->setPassword($GLOBALS['PASS']);
	$this->setDbname($GLOBALS['bd']);
    }
	
    public function getServer(){
	return $this->server;
    }

    public function setServer($value){
	$this->server = $value;
    }
	
    public function getUsername(){
	return $this->username;
    }

    public function setUsername($value){
	$this->username = $value;
    }
	
    public function getPassword(){
	return $this->password;
    }

    public function setPassword($value){
    	$this->password = $value;
    }
	
    public function getDbname(){
	return $this->dbname;
    }

    public function setDbname($value){
	$this->dbname = $value;
    }
	
    public function connect()	{
	
	$this->link=mysqli_connect($this->getServer(),$this->getUsername(),$this->getPassword(), $this->getDbname());			
	if (!$this->link) {
           die('Error, could not connect: ' .$this->error());
	}				
 	return $this->link;
    }
	
	/*public function bd($database){
		$this->dbname = mysqli_select_db($database, $this->link);
		if (!$this->dbname) {
			die ('Error, can\'t use database: ' .$this->error());
		}
	}*/
	
    public function close()	{
	return mysqli_close($this->link);
    }

    public function error()	{
	return mysqli_error($this->link);
    }

    public function consulta($query){		
	$con= $this->connect();	
	$resultat = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());

	return $resultat;
    }
	
    public function consultaActors($query){		
	$con= $this->connect();		
	$consulta = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());
	$cont = 0;
	while ($row=mysqli_fetch_array($consulta)) {
            $actor = new Actor($row["id"],$row["nif"], $row["name"], $row["lastname"], $row["genre"], $row["photoURL"]);
            $arrayActors[$cont] = $actor;
            $cont++;
	}
	
	return $arrayActors;
    }
    
    public function consultaDirectors($query){		
	$con= $this->connect();		
	$consulta = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());
	$cont = 0;
	while ($row=mysqli_fetch_array($consulta)) {
            $director = new Director($row["id"],$row["nif"], $row["name"], $row["lastname"]);
            $arrayDirectors[$cont] = $director;
            $cont++;
	}
	
	return $arrayDirectors;
    }
    public function consultaObres($query){		
	$con= $this->connect();		
	$consulta = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());
	$cont = 0;
	while ($row=mysqli_fetch_array($consulta)) {
            $obra = new Obra($row["id"],$row["name"], $row["description"], $row["type"], $row["startDate"], $row["endDate"], $row["directorId"]);
            $arrayObres[$cont] = $obra;
            $cont++;
	}
	
	return $arrayObres;
    }
    public function consultaPapers($query){		
	$con= $this->connect();		
	$consulta = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());
	$cont = 0;
	while ($row=mysqli_fetch_array($consulta)) {
            $paper = new Paper($row["id"],$row["paper"], $row["actorId"], $row["obraId"]);
            $arrayPapers[$cont] = $paper;
            $cont++;
	}
	
	return $arrayPapers;
    }
    public function consultaUsers($query){		
	$con= $this->connect();		
	$consulta = mysqli_query($con, $query) or die('Error, query failed: '.$this->error());
	$cont = 0;
	while ($row=mysqli_fetch_array($consulta)) {
            $user = new User($row["id"],$row["username"], $row["password"], $row["role"]);
            $arrayUsers[$cont] = $user;
            $cont++;
	}
	
	return $arrayUsers;
    }
}    
?>