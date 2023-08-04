<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/estilo-ejerciciosPHP.css">
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
	echo "<link rel='stylesheet' href='usocss.css'>";

	$da = $_REQUEST['datos'];
	if ($da == '') {
        echo "<script language='javascript'>alert('Es obligatorio ingresar un numero');</script>";
        echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    }

    else if (is_numeric($da)) {
    	if ($da<=1) {
    	echo "<script language='javascript'>alert('Colocar solo un numero que sea mayor a 0');</script>";
    	echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    	}
    	else{

	    	for ($i=0; $i<$da ; $i++) { 
			$dato[$i] = random_int(20, 100);
			}

			for ($i=0; $i<$da ; $i++) {
				$num[$i]=$dato[$i]; 
				$residuo=0;
				$sum = 0;
			    while($num[$i] > 0){
			        $residuo = $num[$i]% 10;
			        $num[$i] =floor( $num[$i] / 10);
			        $sum = $sum + $residuo;
					$dataso[$i] = $sum;
				}

			}

			//Generar tabla
			
			echo "<form class='contenido-columnas centrado marco item-footer padding-direccion logo-tamaño tabla'>";
				echo "<table class='centrado'>";
					echo "<tr>";
						echo "<td>Número</td>";
						echo "<td>Suma de digitos</td>";
						echo "<td>Descripcion</td>";
					echo "</tr>";
				for ($i=0; $i<$da ; $i++) {
					echo "<tr>";
						echo "<td>$dato[$i]</td>";
						echo "<td>$dataso[$i]</td>";
					if ($dataso[$i]%2==0){
						echo "<td>Par</td>";
					}
					else {				
						echo "<td>Impar</td>";
						}
					echo "</tr>";
				}
				echo "</table>";
			echo "</form>";
    		}
		}
    else {
    	echo "<script language='javascript'>alert('Solo puede ingresar valores numerico');</script>";
    	echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    }
?>
	<div class="desplazamientoEjercicios contenido-columnas">
	    <a href="EjercicioPHP1.php">Ejercicio 1</a>
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



