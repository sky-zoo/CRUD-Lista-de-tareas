<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>CRUD ToDo List</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
	<header>
		<nav class="nav-header">
			<h1 class="nav-header--h1">TODO List</h1>
		</nav>
	</header>
	<div class="contenedor">
		<form class="todo-form" action="accionesBBDD/enviar.php" method="POST">
			<p class="todo-form--h1">Agregar tarea</p>
			<div class="todo-form--div">
				<p class="todo-form-p">Titulo: </p>
				<input class="todo-form__title" required type="text" name="titulo">
				<p class="todo-form-p">Descripcion de la tarea:</p>
				<textarea class="todo-form__description" required name="descripcion"></textarea>
				<div class="todo-form__submit">
					<input class="todo-form__submit--button" type="submit" value="Enviar">
				</div>
			</div>
		</form>
		<table class="table">
			<tr class="table__trow-unico">
				<td class="table__trow-td-unicos">Titulo</td>
				<td class="table__trow-td-unicos">Descripción</td>
				<td class="table__trow-td-unicos">Editar</td>
			</tr>
			<?php
				include('accionesBBDD/mostrarDatos.php');

				foreach ($resultados as $valor) {
					echo "<tr class='table__trow'>
							<td class='table__trow-td'>" . $valor['titulo'] . "</td>
							<td class='table__trow-td'>" . $valor['descripcion'] . "</td>
							<td class='table__trow-td--edicion'>
								<a class='boton-edicion' href='accionesBBDD/editar.php?id=" . $valor[0] . "'>
									<i class='far fa-edit'></i>
								</a>
								<a class='boton-edicion' href='accionesBBDD/eliminar.php?id=" . $valor[0] . "'>
									<i class='fas fa-trash-alt'></i>
								</a>
							</td>
						  </tr>";
				}
			?>
		</table>
	</div>
</body>
<script src="https://kit.fontawesome.com/89040328dd.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
</html>