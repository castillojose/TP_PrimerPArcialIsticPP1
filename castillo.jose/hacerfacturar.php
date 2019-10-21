<?php

$precio=200;
$patente2 = $_GET['patente'];



$archivo = fopen('vehiculos.txt', 'r');

while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));


    if ($objeto->patente == $patente2)
    {
    
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        $horaSalida = mktime();

        $tiempo = $horaSalida - $objeto->horaIngreso;

        $cobrar = ($tiempo / 60 /60) * $precio;
    

       $objetoFacturado = new stdClass();

       date_default_timezone_set('America/Argentina/Buenos_Aires');

       $objetoFacturado->Vehiculo = $patente2;
       $objetoFacturado->fechaEntrada = date("d-m-y H:i",$objeto->horaIngreso);
       $objetoFacturado->fechaSalida = date("d-m-y H:i",$horaSalida);
       $objetoFacturado->importe = $cobrar;
    
       $archivo1 = fopen('facturados.txt', 'a');
       fwrite($archivo1, json_encode($objetoFacturado)."\n");
       fclose($archivo1);
       
       
       header("Location: pagar.php? &cobrar=".$cobrar."&ingreso=".$objeto->horaIngreso."&salida=".$horaSalida."&patente=".$patente2);
       break;
    
   }

   else
   {
       header("Location: no.php");
   }
 
}

fclose($archivo);

?>






