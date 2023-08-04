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
		$conn = conectar();
	?>
	<div class="tabla centrado">
	<table border="black">
		<tr>
			<th>Nro. de Boleto</th>
			<th>DNI</th>
			<th>Paquete de Tour</th>
			<th>Tarjeta</th>
			<th>Nro. de Tarjeta</th>
			<th>CVC</th>
			<th>Fecha de Reserva</th>
			<th colspan="2">Acciones</th>
		</tr>
		<?php
		foreach (listarBoleto($conn) as $key => $value) {
		?>
		<tr>
			<td><?=$value[0]?></td>
			<td><?=$value[1]?></td>
			<td><?=$value[2]?></td>
			<td><?=$value[3]?></td>
			<td><?=$value[4]?></td>
			<td><?=$value[5]?></td>
			<td><?=$value[6]?></td>
			<td>
				<div class="diseñoEliminarbtn">
				<a href="../../procesamiento_administrador/proceso_reservar.php?accion=eliminar&boleto=<?=$value[0]?>">Eliminar</a>
				</div>
			</td>
			<td>
				<div class="diseñoModificarbtn">
				<a href="editar.php?boleto=<?=$value[0]?>">Modificar</a>
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