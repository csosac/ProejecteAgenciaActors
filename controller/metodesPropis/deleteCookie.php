<?php

function deleteCookie($name,$value) {
    if (isset($_COOKIE[$name])){
    setcookie($name,$value, time()-3600, "/");
    }
}

?>