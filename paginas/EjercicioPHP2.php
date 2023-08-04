<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosPHP.css">
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<main>
	<form method="post" action="salidaEjercicioPHP2.php" class="tamaniofont centrado marco item-footer padding-direccion">
	<label>Nº de datos aleatorios</label><br>
	<input class="cuadrodetexto" type="text" name="datos"><br>
	<input type="submit" name="aceptar" value="Aceptar">
	</form>

	<div class="desplazamientoEjercicios contenido-columnas">
    	<a href="EjercicioPHP1.php">Ejercicio 1</a>
    	<a href="EjercicioPHP3.php">Ejercicio 3</a>
    </div>
</main>

	<?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>