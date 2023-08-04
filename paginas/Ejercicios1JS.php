<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosJS.css">
	<script type="text/javascript" src="../js/scriptEjercicio.js"></script>
	<title></title>
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<main>
	<div class="centrado">
		<form name="informacion">
			<h2>Ejercicio 1</h2>
	        <div class="estilo-ejercicio1">
	            <label>Ingresar numero:</label><br>
	            <input type="number" name="info"><br>
		        <div class="estilo-boton">
		            <input type="button" name="" onclick="validarInfo()" value="Mostrar Datos">
		            <input type="reset" name="borrar" value="borrar">
		        </div>
	            <textarea name="salida" rows="10" cols="40"></textarea>
	        </div>
    	</form>
    	<div class="desplazamientoEjercicios">
    		<a href="Ejercicios2JS.php">Ejercicio 2</a>
    	</div>
	</div>
</main>

	<?php 
    include '../footer/footer2.php';
    ?>

</body>
</html>