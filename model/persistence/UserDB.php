<?php

include_once("controller/metodesPropis/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class UserDB {

    public function obtenirUser($username) {
        try {
            $con = new db();
            $query = $con->prepare("SELECT * FROM user WHERE username = :username");
            $query->bindValue(":username", $username);
            $result = $con->consultarObjectes($query);

            foreach ($result as $row) {
                $id = $row["id"];
                $username = $row["username"];
                $password = $row["password"];
                $role = $row["role"];
                $user = new User($id, $username, $password, $role);
            }
            return $user;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}

?>