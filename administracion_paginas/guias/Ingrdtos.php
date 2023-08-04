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
		require '../../controlador/conexion.php';
		$conn=conectar();
		$codigo=buscarCodigoDisponibleGuia($conn);

	?>
	<div class="centrado card_reclamos">
	<form action="insertar.php" method="POST" enctype="multipart/form-data"  onsubmit=" return validarInputs()">
		<div class="contenidoColumnas separardor_reclamo">
		<label>Id del guia</label>
		<input type="text" name="ID_guia" id="ID_guia" value="<?=$codigo[0]?>"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Nombre del guia</label>
		<input type="text" name="Nombre_guia" id="Nombre_guia"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Foto del guia</label>
		<input type="file" name="Foto_guia"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Descripcion del guia</label>
		<textarea name="Descripcion_guia" id="Descripcion_guia" placeholder="Describe al guía..."></textarea><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Región en la que trabaja:</label>
		<select name="Region" id="Region">
			<option value="Costa">Costa</option>
			<option value="Sierra">Sierra</option>
			<option value="Selva">Selva</option>
		</select>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="btn btn-primary" value="Agregar">
		</div>
	</form>	
	</div>
	<script>
	function validarInputs(){
        let id=document.getElementById('ID_guia').value;
        let nombre=document.getElementById('Nombre_guia').value;
        let des=document.getElementById('Descripcion_guia').value;
        let reg=document.getElementById('Region').value;

        if(id===""){
        alert("Complete el ID del guía");
        return false;
        }
        else if(nombre===""){
            alert("Complete el nombre del guía")
            return false;
        }
         else if(des==="")  {
          alert("Complete la descripción");
          return false;
        }
         else if(reg==="")  {
          alert("Complete la región en la que trabaja el guía");
          return false;
        }
    }
	</script>
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
				<a href="../../index.php">Andes Fly S.A.</a>
				<p>. All Rights Reserved</p>
			</div>	
		</div>

	</footer>
</body>
</html>