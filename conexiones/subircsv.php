<?php
	include("conexion.php");
	$mensage = '';
	foreach ($_FILES as $key) 
	{
		if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Ccontinuamos 
			{
				$NombreOriginal = $key['name'];
				$temporal = $key['tmp_name']; 
				$temp_name=$NombreOriginal;
				$Destino = $ruta_subida.$temp_name;
				
				move_uploaded_file($temporal, $Destino); 		
			}
	
		if ($key['error']=='') //Si no existio ningun error, retornamos un mensaje por cada archivo subido
			{
				$mensage .= 'Listo';
			}
		if ($key['error']!='')//Si existio algún error retornamos un el error por cada archivo.
			{
				//$mensage .= '-> No se pudo subir el archivo <b>'.$NombreOriginal.'</b> debido al siguiente Error: n'.$key['error']; 
				$mensage .= 'No Listo'; 
			}
		
	}
	echo $Destino;
?>