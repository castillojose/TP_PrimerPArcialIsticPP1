<?php

$Bandera=0;
$nombreUsuario = $_GET['nombre'];
$contraseñaUsuario = $_GET['contraseña'];


$archivo = fopen ('registro.txt','r');
while(!feof ($archivo))
{
	$objeto = json_decode(fgets($archivo));

    if ($objeto->nombre == $nombreUsuario && $objeto->contraseña == $contraseñaUsuario) 
    {
    	$Bandera=1;
    }
        
}

if ($Bandera==1)
{
	header("Location: ok.php");
	
}
else
{
    header("Location: no.php");
    
		
}
  
 fclose($archivo);

?>