<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosPHP.css">
	<script type="text/javascript" src="../js/scriptEjercicioPHP4.js"></script>
	<title></title>
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

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

	<?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>