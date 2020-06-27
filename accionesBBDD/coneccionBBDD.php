<?php

	$nombreServidor = "localhost";
	$nombreUsuario = "root";
	$pass = "";
	$nombreBBDD = "lista";

	try{
		$coneccion = new PDO("mysql:host=$nombreServidor; dbname=$nombreBBDD", $nombreUsuario, $pass);

		$coneccion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	}catch(PDOException $e){
		echo "coneccion fallida " . $e->getMessage();
	}

?>