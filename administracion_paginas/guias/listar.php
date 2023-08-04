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
	<header>
		<img  src="../../Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="../../index.php">Inicio</a>
		   <a href="../../Nosotros.php">¿Quiénes somos?</a>
		   <a href="../../paquetes.php">Paquetes de tours</a>
		   <a href="../../GuiasTuristicos.php">Nuestros guias</a>
		   <a href="../../Contactanos.php">Contactanos</a>
		   <a href="../../Ejercicios1JS.php">Ejercicios JS</a>
		   <a href="../../EjercicioPHP1.php">Ejercicios PHP</a>
		   <a href="../../administrador.php">Administrador</a>
		</nav>
		
			<form method="post" class="form-nav" action="../../RegionCosta.php">
				<select name="Departamentos" size="" select onChange="window.open(this.options[this.selectedIndex].value,'_self')">
					<option selected>Departamentos</option>
					<option value="Cusco.php">Cuzco</option>
					<option value="#">Tambopata</option>
					<option value="#">Apurimac</option>
					<option value="CostaVerde.php">Lima-Costa Verde</option>
					<option value="#">Ica</option>
					<option value="#">La Merced</option>
					<option value="#">Chanchamayo</option>
					<option value="#">Paracas</option>
					<option value="Puno.php">Puno</option>
				</select>
			</form>

			<form class="boton" action="../../iniciar.php">
				<input type="submit" value="INICIAR">
			</form>
		
		
	</header>

	<main>
	<?php
		include_once '../../controlador/conexion.php';
		$conn=conectar();
	?>
	<div class="tabla centrado">
	<table border="black">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Foto</th>
			<th>Descripcion</th>
			<th>Region en la que trabaja</th>
			<th colspan="2">Acciones</th>
		</tr>
		<?php
		foreach (listarGuia($conn) as $key => $value) {
		?>
		<tr>
			<td><?=$value[0]?></td>
			<td><?=$value[1]?></td>
			<td>
				<img src="../../<?=$value[2]?>" width="100">
			</td>
			<td><?=$value[3]?></td>
			<td><?=$value[4]?></td>
			<td>
				<div class="diseñoEliminarbtn">
				<a href="../../procesamiento_administrador/proceso_guias.php?accion=eliminar&identificador=<?=$value[0]?>">Eliminar</a>
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
		<a href="../../administrador.php">Volver</a><br>
	</div>
	</main>

	<footer id="pie" class="centrado">

		<div class="contenido-columnas">
			<div class="item-footer padding-direccion">
				<h2>DIRECCIÓN</h2>
				<p>Av. Arequipa 1480,Cercado de Lima, Provincia de Lima</p>
				<p>+51 945 654 321</p>
				<p>informaciones@andesfly.com | derechosrecervadors@andesfly.com</p>
			</div>

			<div class="logos-tamaño item-footer padding-nosotros">
				<h2>CONOCE PERÚ<h2>
				<a href="Nosotros.php">Sobre Nosotros</a><br>
				<img src="../../Imagenes_header/facebook.png"><br>
				<img src="../../Imagenes_header/youtube.png">
			</div>

			<div class="item-footer padding-2022">
				<a href="../../LibroReclamos.php">Libro de Reclamos</a>
				<p><center>2022 ©</p>
				<a href="../../sindex.php">Andes Fly S.A.</a>
				<p>. All Rights Reserved</p>
			</div>	
		</div>

	</footer>
</body>
</html>