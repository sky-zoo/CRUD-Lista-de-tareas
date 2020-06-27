<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>CRUD ToDo List</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet"> 
</head>
<body>
	<header>
		<nav class="nav-header">
			<h1 class="nav-header--h1">TODO List</h1>
		</nav>
	</header>
	<?php 
		require('coneccionBBDD.php');

		$tareaId = $_GET['id'];
		if( isset($_POST['titulo']) && isset($_POST['descripcion']) ){
			
			$tituloNuevo = $_POST['titulo'];
			$descripcionNueva = $_POST['descripcion'];

			$query = $coneccion->prepare("UPDATE tareas SET titulo='$tituloNuevo', descripcion='$descripcionNueva' WHERE id=$tareaId");
			$query->execute();
			header('Location: ../index.php');
		}
	?>
	<div class="contenedor">
		<form class="todo-form" action="editar.php?id=<?php echo $tareaId;?>" method="POST">
			<p class="todo-form--h1">Editar tarea</p>
			<div class="todo-form--div">
				<p class="todo-form-p">Titulo: </p>
				<?php

					$query = $coneccion->prepare("SELECT titulo, descripcion FROM tareas WHERE id='$tareaId'");
					$query->execute();

					$resultado = $query->fetchAll();

				?>
				<input class="todo-form__title" required type="text" name="titulo" placeholder="Nuevo titulo..." value="<?php 
										foreach($resultado as $valores){
											echo $valores['titulo'];
										}
									?>">
				<p class="todo-form-p">Descripcion de la tarea:</p>
				<textarea class="todo-form__description" required name="descripcion" placeholder="Nueva descripcion..."><?php 
									foreach($resultado as $valores){
										echo $valores['descripcion'];
									}
								?></textarea>
				<div class="todo-form__submit">
					<input class="todo-form__submit--button" type="submit" name="actualizar" value="Enviar">
				</div>
			</div>
		</form>
	</div>
</body>
<script src="https://kit.fontawesome.com/89040328dd.js" crossorigin="anonymous"></script>
<script type="text/javascript">
	
</script>
</html>

