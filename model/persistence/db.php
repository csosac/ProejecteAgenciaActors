<?php

class db extends PDO {

    private $server;
    private $username;
    private $password;
    private $dbname;
    private $link;

    public function __construct() {
        $this->setServer($GLOBALS['server']);
        $this->setUsername($GLOBALS['USER']);
        $this->setPassword($GLOBALS['PASS']);
        $this->setDbname($GLOBALS['bd']);
        $this->connect();
    }

    public function getServer() {
        return $this->server;
    }

    public function setServer($value) {
        $this->server = $value;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($value) {
        $this->username = $value;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($value) {
        $this->password = $value;
    }

    public function getDbName() {
        return $this->dbname;
    }

    public function setDbName($value) {
        return $this->dbname = $value;
    }

    private function connect() {
        $dsn = 'mysql:host=' . $this->server . ';dbname=' . $this->dbname;
        parent::__construct($dsn, $this->getUsername(), $this->getPassword());
        //$this->link = new PDO($this->getServer(),$this->getUsername(),$this->getPassword());        
    }

    public function getLink() {
        return $this->link;
    }

    public function consulta($query) {
        $query->execute();
    }

    public function consultarObjectes($query) {
        $query->execute();
        $result = $query->FetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

?>