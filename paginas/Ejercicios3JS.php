<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosJS.css">
	<script type="text/javascript" src="../js/scriptEjercicio3.js"></script>
	<title></title>
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<main>
	<form name="horoscopo" class="centrado marco item-footer padding-direccion logo-tamaño" >
				<h2>Ingrese su fecha de nacimiento</h2><br>
				<input type="text" id="dias" name="dias"> / <input type="text" id="mes" name="mes"> / <input type="text" id="anio" name="anio"><br><br>
				<input type="button" name="" onclick="Solucion()" value="Saber">
				<h2>Según el horoscopo de alquimia su metal es: </h2><br>
				<div id="mostrarAqui" class="tamaniofont"> </div><br>
				<img id="imagenHorosco">

  	</form>
		<div class="desplazamientoEjercicios contenido-columnas">
    		<a href="Ejercicios2JS.php">Ejercicio 2</a>
    	</div>
</main>

	<?php 
    include '../footer/footer2.php';
    ?>

</body>
</html>