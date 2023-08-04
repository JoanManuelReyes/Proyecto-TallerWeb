<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/estilo-ejerciciosPHP.css">
	<script type="text/javascript" src="js/scriptEjercicioPHP4.js"></script>
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
	<?php
		if(isset($_POST['calcular'])){
			$n=$_POST['primos'];
		}
	?>
	<form method="post" class="estilo-ejercicio2p1">
	<div class="centrado">
			<div class="lineal">
				<label>Ingrese la cantidad de los primeros números primos:</label>
				<div class="estiloMeses">
					<input type="text" id="cantidadPrimos" name="primos" value="<?php if(isset($_POST['calcular'])) echo $n ?>"><br>
				</div>
			</div>
			<div class="btnAceptar centrado">
				<input type="button" name="detector" value="Confirmar datos" onclick="validarDatos()">
				<input type="submit" name="calcular" value="Mostrar Primos" id="activar" disabled=""><br>
			</div>
		</form>
	<?php
		if(isset($_POST['calcular'])){
			$n=$_POST['primos'];

			$num=0;
			while($n>0){
				$num=$num+1;
				$aux=1;
				$cont=0;
				while($aux<=$num){
					if($num%$aux==0){
						$cont=$cont+1;
					}
					$aux=$aux+1;
				}
				if($cont==2){
					echo "<p>El número $num es primo.</p><br>";
					$n--;
				}
			}
		}
	?>
	
	</div>
	<div class="desplazamientoEjercicios centrado bajar">
    	<a href="EjercicioPHP3.php">Ejercicio 3</a>
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