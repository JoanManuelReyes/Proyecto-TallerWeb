<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilo-Administrador.css">
	<title></title>
</head>
<body>
	<?php 
	include '../../header/header3_Administrador.php';
	?>

	<main>
	<?php
		include_once '../../controlador/conexion.php';
		$conn=conectar();
	?>
	<div class="tabla centrado">
	<table border="black">
		<tr>
			<th>Código</th>
			<th>Nombre</th>
			<th>Región</th>
			<th>Descripcion</th>
			<th>Foto</th>
			<th>Cantidad de días</th>
			<th>Precio</th>
			<th>ID del guia</th>
			<th colspan="2">Acciones</th>
		</tr>
		<?php
		foreach (listarTour($conn) as $key => $value) {
		?>
		<tr>
			<td><?=$value[0]?></td>
			<td><?=$value[1]?></td>
			<td><?=$value[2]?></td>
			<td><?=$value[3]?></td>
			<td>
				<img src="../../<?=$value[4]?>" width="100">
			</td>
			<td><?=$value[5]?></td>
			<td><?=$value[6]?></td>
			<td><?=$value[7]?></td>
			<td>
				<div class="diseñoEliminarbtn">
				<a href="../../procesamiento_administrador/proceso_tour.php?accion=eliminar&identificador=<?=$value[0]?>">Eliminar</a>
				</div>
			</td>
			<td>
				<div class="diseñoModificarbtn">
				<a href="editar.php?identificador=<?=$value[0]?>">Modificar</a>
				</div>
			</td>
		</tr>
		
		<?php
		}
		?>
	</table>
	</div>

	<div class="centrado reclamo_boton">
		<a href="../../paginas/administrador.php">Volver</a><br>
	</div>
	</main>

	<?php 
	include '../../footer/footer3_Administrador.php';
	?>
</body>
</html>