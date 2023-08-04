<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" type="text/css" href="../css/estilo-Administrador.css">
	<title></title>
</head>
<body>
	<?php 
	include '../header/header3_AdministradoInicio.php';
	?>

	<?php 
		session_start();
		if (!isset($_SESSION['emailusuario'])) {
			header('location: iniciar.php');
		}

	?>
	<h3>Usuario: <?=$_SESSION['emailusuario']?></h3>
	
	<h3><a href="../procesamiento_administrador/proceso_cerrar_sesion.php">Cerrar Sesión</a></h3>

	<main>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Guías Turístico</h1>
	<div class="separar">
		<a href="../administracion_paginas/guias/Ingrdtos.php">Agregar guía turístico</a><br>
	</div>
		<a href="../administracion_paginas/guias/listar.php">Listar los guía turístico</a>
	</div>

	<div class="centrado card_administrador separar"> 	
	<h1>Gestion de Reclamos</h1>
	<div class="separar">
		<a href="../administracion_paginas/reclamos/agregar.php">Agregar reclamo</a><br>
	</div>
		<a href="../administracion_paginas/reclamos/listar.php">Listar reclamos</a>
	</div>

	<div class="centrado card_administrador separar"> 	
	<h1>Gestion de Contactarse</h1>
	<div class="separar">
		<a href="../administracion_paginas/contactarse/agregar.php">Agregar registro de solicitud de contacto</a><br>
	</div>
		<a href="../administracion_paginas/contactarse/listar.php">Listar registros de solicitud de contacto</a>
	</div>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Reservar</h1>
	<div class="separar">
		<a href="../administracion_paginas/reservar/agregar.php">Agregar una reserva</a><br>
	</div>
		<a href="../administracion_paginas/reservar/listar.php">Listar las reservas</a>
	</div>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Tours</h1>
	<div class="separar">
		<a href="../administracion_paginas/tours/Ingrdtos.php">Agregar un tour</a><br>
	</div>
		<a href="../administracion_paginas/tours/listar.php">Listar los tours</a>
	</div>

	<div class="centrado card_administrador separar"> 
	<h1>Gestion de Usuarios</h1>
	<div class="separar">
		<a href="../administracion_paginas/login/agregar.php">Agregar un Usuario</a><br>
	</div>
		<a href="../administracion_paginas/login/listar.php">Listar los Usuarios</a>
	</div>


	</main>

	<?php 
	include '../footer/footer2.php';
	?>
</body>
</html>