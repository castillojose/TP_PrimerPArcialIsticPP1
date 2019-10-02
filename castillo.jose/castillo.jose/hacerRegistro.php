<?php
$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['nombre'];
$miObjeto->contraseña = $_GET['contraseña'];

$archivo = fopen('registro.txt', 'a');
fwrite($archivo, json_encode($miObjeto)."\n");
header("Location: OK.php");
fclose($archivo);
?>