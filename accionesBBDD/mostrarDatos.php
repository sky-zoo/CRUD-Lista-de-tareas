<?php
	require('coneccionBBDD.php');

	$query = $coneccion->prepare("SELECT * FROM tareas;");
	$query->execute();

	$resultados = $query->fetchAll();

?>