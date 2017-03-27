<?php

class User {

    private $id_User;
    private $username;
    private $password;
    private $role;
   
    function __construct() {
        switch (func_num_args()) {
            case 3:
                $this->setId_User(null);
                $this->setUsername(func_get_args()[0]);
                $this->setPassword(func_get_args()[1]);
                $this->setRole(func_get_args()[2]);
                break;
            case 4:
                $this->setId_User(func_get_args()[0]);
                $this->setUsername(func_get_args()[1]);
                $this->setPassword(func_get_args()[2]);
                $this->setRole(func_get_args()[3]);
                break;
        }
    }
    public function __GET($k) {
        return $this->$k;
    }

    public function __SET($k, $v) {
        return $this->$k = $v;
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

    function getUserByUsername($username) {
        $UserDB = new UserDB();
        return $UserDB->obtenirUser($username);
    }

    function validarUsuari($user, $password) {
        $valid = false;
        if ($this->__GET('username') == $user && $this->__GET('password') == $password){
                $valid = true;
        }
        return $valid;
    }

}

?>