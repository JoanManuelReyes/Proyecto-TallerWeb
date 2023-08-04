<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="css/estilo-ejerciciosPHP.css">
	<script type="text/javascript" src="js/scriptEjercicioPHP1.js"></script>
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
	<form method="post" class="estilo-ejercicio1p1">
	<div class="centrado">
		<div class="lineal">
			<label>Paquete tour: </label>
					<select name="paquete" id="selecPaquete" value="" onchange="mostrarDetalles()">
						<option value="">Eliga un paquete</option>
						<option value="Costa verde">Costa verde</option>
						<option value="Huacachina">Huacachina</option>
						<option value="Paracas">Paracas</option>
						<option value="Cusco">Cusco</option>
						<option value="Apurimac">Apurimac</option>
						<option value="Puno">Puno</option>
						<option value="Tambopata">Tambopata</option>
						<option value="Tarapoto">Tarapoto</option>
						<option value="Chanchamayo">Chanchamayo</option>
					</select>
		</div>
		<div class="lineal">
			<p>Detalles: </p><p id="detallePaquete">Elegir paquete</p>
		</div>
		<div class="lineal">
			<p>Percio: S/.</p><p id="precioPaquete" name="monto">-</p>
		</div>
		<div class="lineal">
			<label>Cantidad de meses que fraccionará la compra:</label>
			<div class="estiloMeses">
				<input type="text" id="cantidadMeses" name="meses"><br>
			</div>
		</div>
	</div>
		<div class="lineal">
		<div class="centrado">
			<label>Tipo de tarjeta:</label><br>
		</div>

			<div>
				<input type="radio" id="nombreTarjeta1" name="tarjeta" value="Visa">Visa<br>
				<input type="radio" id="nombreTarjeta2" name="tarjeta" value="MasterCard">MasterCard<br>
				<input type="radio" id="nombreTarjeta3" name="tarjeta" value="America Express">America Express<br>
			</div>
		</div>
		<div class="btnAceptar centrado">
			<input type="button" name="detector" value="Confirmar datos" onclick="validarDatos()">
			<input type="submit" name="calcular" value="Generar Tabla" id="activar" disabled=""><br>
		</div>
	</form>

	<?php
		if(isset($_POST['calcular'])){
			$m=$_POST['meses'];
			$t=$_POST['tarjeta'];
			$paquete=$_POST['paquete'];

			if($paquete=='Costa verde'){
				$p=1150;
			}else if($paquete=='Huacachina'){
				$p=1730;
			}else if($paquete=='Paracas'){
				$p=850;
			}else if($paquete=='Cusco'){
				$p=990;
			}else if($paquete=='Apurimac'){
				$p=1542;
			}else if($paquete=='Puno'){
				$p=570;
			}else if($paquete=='Tambopata'){
				$p=870;
			}else if($paquete=='Tarapoto'){
				$p=940;
			}else if($paquete=='Chanchamayo'){
				$p=740;
			}

			
			if($t=='Visa'){
				$interes=0.02;
				$cm=(($p*$interes)/(1-pow((1+$interes),(-$m))));
			}else if($t=='MasterCard'){
				$interes=0.025;
				$cm=(($p*$interes)/(1-pow((1+$interes),(-$m))));
			}else if($t=='America Express'){
				$interes=0.03;
				$cm=(($p*$interes)/(1-pow((1+$interes),(-$m))));
			}


			echo "<div class='centrado letraRespuesta'>";
				echo "<div class='detallesRespuesta'>";
					echo "<p>Paquete seleccionado: $paquete</p>";
					echo "<p>Precio: S/. $p</p>";
					echo "<p>Meses a fraccionar la compra: $m</p>";
					echo "<p>Tarjeta: $t</p>";
				echo "</div>";
				
				echo "<div class='tabla'>";
					echo "<table>";
					echo "<th bgcolor='#A8F7FA'>Mes</th>";
					echo "<th bgcolor='#A8F7FA'>Cuota mensual</th>";
					echo "<th bgcolor='#A8F7FA'>Pago del interés</th>";
					echo "<th bgcolor='#A8F7FA'>Pago del capital</th>";
					echo "<th bgcolor='#A8F7FA'>Deuda</th>";
					$deuda=$p;
					$pagointeres=$p;
					for($i=1;$i<=$m;$i++){
					if($deuda<=$cm){
						$pagocapital=$deuda;
						$pagointeres=$pagocapital*$interes;
						$deuda=0;
					}else{
					$pagointeres=$deuda*$interes;
					$pagocapital=$cm-$pagointeres;
					$deuda=$deuda-$pagocapital;
					}
					echo "<tr>";
					echo "<td>$i</td>";
					echo "<td>".number_format((float)$cm, 2, '.', '')."</td>";
					echo "<td>".number_format((float)$pagointeres, 2, '.', '')."</td>";
					echo "<td>".number_format((float)$pagocapital, 2, '.', '')."</td>";
					echo "<td>".number_format((float)$deuda, 2, '.', '')."</td>";
					echo "</tr>";
					}
					echo "</table>";
				echo "</div>";
			echo "</div>";
		}
	?>
	<div class="desplazamientoEjercicios centrado">
    	<a href="EjercicioPHP2.php">Ejercicio 2</a>
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