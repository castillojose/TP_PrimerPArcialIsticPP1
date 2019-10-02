<?php
$miObjeto = new stdClass();
$miObjeto->nombre = $_GET['nombre'];
$miObjeto->contraseña = $_GET['contraseña'];

$archivo = fopen ('registro.txt', 'r');
while(!feof ($arcivo))
{
	$objeto = json_decode(fgets($archivo));


    if ($miObjeto->nombre == $objeto->nombre && $miObjeto->contraseña == $objeto->contraseña) 
    {
        header("Location: ok.php");
		fclose($archivo);
	}
	else
	{
		header("Location: no.php");
		fclose($archivo);
	}
}

fclose($archivo);
?>
   


