<?php
	require('coneccionBBDD.php');

	$tareaId = $_GET['id'];


	$query = $coneccion->prepare("DELETE FROM tareas WHERE id='$tareaId'");
	$query->execute();

	header('Location: ../index.php');

?>