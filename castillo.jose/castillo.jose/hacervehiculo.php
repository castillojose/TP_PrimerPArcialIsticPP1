<?php
$miObjeto = new stdClass();
$miObjeto->patente = $_GET['patente'];

$archivo = fopen('vehiculos.txt', 'a');
fwrite($archivo, json_encode($miObjeto)."\n");
fclose($archivo);
?>