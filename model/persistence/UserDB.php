<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UserDB {

    public function obtenirUser($username) {
        try {
            $con = new db();
            $stm = $con->prepare("SELECT * FROM user WHERE username = ?");
            $stm->execute(array($username));

            $r = $stm->fetch(PDO::FETCH_OBJ);

            $paper = new User();
            $paper->__SET('id_User', $r->id);
            $paper->__SET('username', $r->username);
            $paper->__SET('password', $r->password);
            $paper->__SET('role', $r->role);


            return $paper;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


}

?>