<?php

function checkSession() {
    if (session_status() == PHP_SESSION_NONE)
    session_start();
    if (isset($_SESSION["login"])) {
        $ok = true;
    } else {
        $ok = false;
    }
    return $ok;
}

?>