<?php

$idActor = "";
if (isset($_REQUEST['idActor']))
    $idActor = $_REQUEST['idActor'];
$idObra = "";
if (isset($_REQUEST['idObra']))
    $idObra = $_REQUEST['idObra'];
try {
    $conexion = new mysqli('localhost', 'root', '', 'agencia', 3306);
    if ($idObra!=""){
    $consulta = "select id, name, lastname FROM actor WHERE id NOT IN "
            . "(select actorId  from paper where obraId=".$idObra.")";
    }else{
    $consulta = "select id, name, lastname FROM actor ";
    }

    $result = $conexion->query($consulta);
} catch (Exception $e) {
    die($e->getMessage());
}

$elementos = "";
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_array()) {
        if ($fila['id'] == $idActor) {
            $elementos = $elementos . "<option value='" . $fila['id'] . "' selected>" . $fila['name'] . " " . $fila['lastname'] . "</option>\n";
        } else {
            $elementos = $elementos . "<option value='" . $fila['id'] . "'>" . $fila['name'] . " " . $fila['lastname'] . "</option>\n";
        }
    }
}
echo $elementos;
?>