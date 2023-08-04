<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../estilos.css">
	<link rel="stylesheet" type="text/css" href="../../css/estilo-Administrador.css">
	<title></title>
</head>
<body>
	<header>
		<img  src="../../Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="../../index.php">Inicio</a>
		   <a href="../../Nosotros.php">¿Quiénes somos?</a>
		   <a href="../../paquetes.php">Paquetes de tours</a>
		   <a href="../../GuiasTuristicos.php">Nuestros guias</a>
		   <a href="../../Contactanos.php">Contactanos</a>
		   <a href="../../Ejercicios1JS.php">Ejercicios JS</a>
		   <a href="../../EjercicioPHP1.php">Ejercicios PHP</a>
		   <a href="../../administrador.php">Administrador</a>
		</nav>
		
			<form method="post" class="form-nav" action="../../RegionCosta.php">
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

			<form class="boton" action="../../iniciar.php">
				<input type="submit" value="INICIAR">
			</form>
		
		
	</header>

	<main>
	<?php
		include_once '../../controlador/conexion.php';
		$conn = conectar();
		$conn_nroboleto = conectarboleto($conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_reservar.php" method="post" onsubmit=" return validarInputs()">
		<div class="contenidoColumnas separardor_reclamo">
		<label>Nro. de boleto:</label>
		<input type="text" name="boleto" id="boleto" value="<?=$conn_nroboleto[0]?>"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>DNI del Cliente</label>
		<select name="dni">
			<?php
			foreach (listarCliente($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Codigo del Paquete de Tour</label>
		<select name="paquete">
			<?php
			foreach (listarPaquetesTour($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?>-<?=$value[1]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Tarjeta: </label>
		<select name="tarjeta">
			<option value="Tarjeta Visa">Tarjeta Visa</option>
			<option value="Tarjeta MasterCard">Tarjeta MasterCard</option>
			<option value="Tarjeta de débito - BBVA Perú">Tarjeta de débito - BBVA Perú</option>
		</select> <br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Nro. de Tarjeta</label>
		<input type="text" name="nrotarjeta" id="nrotarjeta"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>CVC</label>
		<input type="text" name="cvc" id="cvc"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Fecha de Reserva</label>
		<input type="text" name="fecha" id="fecha"><br>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Agregar">
		</div>
	</form>
	</div>
	<script>
	function validarInputs(){
        let nro=document.getElementById('boleto').value;
        let nrtar=document.getElementById('nrotarjeta').value;
        let cv=document.getElementById('cvc').value;
        let fch=document.getElementById('fecha').value;


        if(isNaN(nro)||nro===""){
        alert("Complete bien el número de boleto");
        return false;
        }
        else if(isNaN(nrtar)||nrtar===""){
            alert("Complete bien el número de tarjeta")
            return false;
        }
         else if(isNaN(cv)||cv===""){
          alert("Complete bien el CVC de la tarjeta");
          return false;
        }
         else if(fch==="")  {
          alert("Complete la fecha");
          return false;
        }
        
    }
	</script>

	<div class="centrado reclamo_boton">
		<a href="../../administrador.php">Volver</a><br>
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
				<img src="../../Imagenes_header/facebook.png"><br>
				<img src="../../Imagenes_header/youtube.png">
			</div>

			<div class="item-footer padding-2022">
				<a href="../../LibroReclamos.php">Libro de Reclamos</a>
				<p><center>2022 ©</p>
				<a href="../../index.php">Andes Fly S.A.</a>
				<p>. All Rights Reserved</p>
			</div>	
		</div>

	</footer>
</body>
</html>