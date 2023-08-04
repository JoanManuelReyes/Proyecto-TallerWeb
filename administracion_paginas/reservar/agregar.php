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
	<?php 
	include '../../header/header3_Administrador.php';
	?>

	<main>
	<?php
		include_once '../../controlador/conexion.php';
		$conn = conectar();
		$conn_nroboleto = conectarboleto($conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_reservar.php" method="post" onsubmit=" return validarInputs()">
		<div class="separardor_reclamo">
		<label>Nro. de boleto:</label><br>
		<input type="text" name="boleto" id="boleto" value="<?=$conn_nroboleto[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>DNI del Cliente</label><br>
		<select class="tamañoletraIngreso" name="dni">
			<?php
			foreach (listarCliente($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Codigo del Paquete de Tour</label><br>
		<select class="tamañoletraIngreso" name="paquete">
			<?php
			foreach (listarPaquetesTour($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?>-<?=$value[1]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Tarjeta: </label><br>
		<select class="tamañoletraIngreso" name="tarjeta">
			<option value="Tarjeta Visa">Tarjeta Visa</option>
			<option value="Tarjeta MasterCard">Tarjeta MasterCard</option>
			<option value="Tarjeta de débito - BBVA Perú">Tarjeta de débito - BBVA Perú</option>
		</select> <br>
		</div>

		<div class="separardor_reclamo">
		<label>Nro. de Tarjeta</label><br>
		<input type="text" name="nrotarjeta" id="nrotarjeta"><br>
		</div>

		<div class="separardor_reclamo">
		<label>CVC</label><br>
		<input type="text" name="cvc" id="cvc"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Fecha de Reserva</label><br>
		<input type="date" name="fecha" id="fecha"><br>
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
		<a href="../../paginas/administrador.php">Volver</a><br>
	</div>
	</main>

	<?php 
	include '../../footer/footer3_Administrador.php';
	?>
</body>
</html>