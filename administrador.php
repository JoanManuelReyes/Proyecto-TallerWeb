<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" type="text/css" href="css/estilo-Administrador.css">
	<title></title>
</head>
<body>
	<header>
		<img  src="Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="index.php">Inicio</a>
		   <a href="Nosotros.php">¿Quiénes somos?</a>
		   <a href="paquetes.php">Paquetes de tours</a>
		   <a href="GuiasTuristicos.php">Nuestros guias</a>
		   <a href="Contactanos.php">Contactanos</a>
		   <a href="Ejercicios1JS.php">Ejercicios JS</a>
		   <a href="EjercicioPHP1.php">Ejercicios PHP</a>
		   <a href="administrador.php">Administrador</a>
		</nav>
		
			<form method="post" class="form-nav" action="/RegionCosta.php">
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

			<form class="boton" action="/iniciar.php">
				<input type="submit" value="INICIAR">
			</form>
		
		
	</header>

	<main>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Guías Turístico</h1>
	<div class="separar">
		<a href="administracion_paginas/guias/Ingrdtos.php">Agregar guía turístico</a><br>
	</div>
		<a href="administracion_paginas/guias/listar.php">Listar los guía turístico</a>
	</div>

	<div class="centrado card_administrador separar"> 	
	<h1>Gestion de Reclamos</h1>
	<div class="separar">
		<a href="administracion_paginas/reclamos/agregar.php">Agregar reclamo</a><br>
	</div>
		<a href="administracion_paginas/reclamos/listar.php">Listar reclamos</a>
	</div>

	<div class="centrado card_administrador separar"> 	
	<h1>Gestion de Contactarse</h1>
	<div class="separar">
		<a href="administracion_paginas/contactarse/agregar.php">Agregar registro de solicitud de contacto</a><br>
	</div>
		<a href="administracion_paginas/contactarse/listar.php">Listar registros de solicitud de contacto</a>
	</div>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Reservar</h1>
	<div class="separar">
		<a href="administracion_paginas/reservar/agregar.php">Agregar una reserva</a><br>
	</div>
		<a href="administracion_paginas/reservar/listar.php">Listar las reservas</a>
	</div>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Tours</h1>
	<div class="separar">
		<a href="administracion_paginas/tours/Ingrdtos.php">Agregar un tour</a><br>
	</div>
		<a href="administracion_paginas/tours/listar.php">Listar los tours</a>
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
				<img src="Imagenes_header/facebook.png"><br>
				<img src="Imagenes_header/youtube.png">
			</div>

			<div class="item-footer padding-2022">
				<a href="LibroReclamos.php">Libro de Reclamos</a>
				<p><center>2022 ©</p>
				<a href="index.php">Andes Fly S.A.</a>
				<p>. All Rights Reserved</p>
			</div>	
		</div>

	</footer>
</body>
</html>