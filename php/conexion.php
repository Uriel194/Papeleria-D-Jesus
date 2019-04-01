<?php
    $usuario = 'root';
	$contrasena = '';
	$servidor = 'localhost';
	$basededatos = 'papeleria';
	$conectar=mysqli_connect($servidor,$usuario,'') or die ("No se ha podido conectar al servidor");
	
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar, $basededatos);
		if(!$base){
            echo"No Se Encontro La Base De Datos";
            			
		}
    }
?>