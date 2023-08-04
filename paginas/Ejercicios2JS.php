<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosJS.css">
	<title></title>
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<main>
	<h1 class="titulo">Ejercicio 2</h1>
		<h1 class="title">PIRAMIDE</h1><br>
		<div class="uno">
			<img class="img1" src="../imagenes/turistas1.jpg"><br>
			<div class="tarjetaEJR2">
			<script type="text/javascript">
				var tamano = prompt("Dime el tamano de la piramide:" );
				var caracter = prompt("Dime el caracter que quieras en la piramide");

				for(var i =1; i<=tamano; i++)
				{
					for(var k=1; k<=(tamano-i); k++)
					{
						document.write("&nbsp;");
					}
					for(var j=1; j<=i; j++){
						document.write([caracter]);
					}
					document.write("<br/>")
				}
			</script>
			</div>
		</div>
		<div class="desplazamientoEjercicios contenido-columnas">
    		<a href="Ejercicios1JS.php">Ejercicio 1</a>
    		<a href="Ejercicios3JS.php">Ejercicio 3</a>
    	</div>
</main>

	<?php 
    include '../footer/footer2.php';
    ?>

</body>
</html>