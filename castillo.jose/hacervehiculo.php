<?php
 $miObjeto2 = new stdClass();

 date_default_timezone_set('America/Argentina/Buenos_Aires');
 $hora=mktime();

 $miObjeto2->patente = $_GET['patente'];
 $miObjeto2->horaIngreso = $hora;
 
 $archivo = fopen('vehiculos.txt', 'a');
 fwrite($archivo, json_encode($miObjeto2)."\n");
 fclose($archivo);
 header("Location: ok.php");

?>