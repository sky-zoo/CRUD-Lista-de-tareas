<?php
	require('coneccionBBDD.php');

	$tituloTarea = $_POST['titulo'];
	$descripcionTarea = $_POST['descripcion'];

	// $accion = ''

	$query = $coneccion->prepare("INSERT INTO tareas(titulo, descripcion) VALUES('$tituloTarea', '$descripcionTarea')");
	$query->execute();

	header("Location: ../index.php");
?>