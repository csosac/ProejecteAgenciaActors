<?php

$id = "";
if (isset($_REQUEST['id']))
    $id = $_REQUEST['id'];
try {
    $conexion = new mysqli('localhost', 'root', '', 'agencia', 3306);
    $consulta = "select id, name, lastname FROM actor ";

    $result = $conexion->query($consulta);
} catch (Exception $e) {
    die($e->getMessage());
}

$elementos = "";
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_array()) {
        if ($fila['id'] == $id) {
            $elementos = $elementos . "<option value='" . $fila['id'] . "' selected>" . $fila['name'] . " " . $fila['lastname'] . "</option>\n";
        } else {
            $elementos = $elementos . "<option value='" . $fila['id'] . "'>" . $fila['name'] . " " . $fila['lastname'] . "</option>\n";
        }
    }
}
echo $elementos;
?>