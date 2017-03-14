<?php
function getCookie($name) {
    if (isset($_COOKIE['$name'])) {
    return  $_COOKIE['$name'];
    }else{
        return '';
    }
}
?>
