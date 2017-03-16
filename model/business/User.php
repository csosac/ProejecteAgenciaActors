<?php

class User
{
    private $id_User;
    private $username;
    private $password;
    private $role;
    
    function __construct($id_User, $username, $password, $role) {
        $this->setId_User($id_User);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setRole($role);
    }
    function getId_User() {
        return $this->id_User;
    }

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function setId_User($id_User) {
        $this->id_User = $id_User;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }


    
    
}

?>