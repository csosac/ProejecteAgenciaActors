<?php
function createCookie($name, $value) {
    setcookie($name, $value, time() + 3600, "/");
}
?>