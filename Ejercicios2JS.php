<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/estilo-ejerciciosJS.css">
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
	<h1 class="titulo">Ejercicio 2</h1>
		<h1 class="title">PIRAMIDE</h1><br>
		<div class="uno">
			<img class="img1" src="imagenes/turistas1.jpg"><br>
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