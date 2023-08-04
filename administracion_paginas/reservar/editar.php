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
		$bol = $_REQUEST['boleto'];
		require '../../controlador/conexion.php';
		$conn = conectar();
		$datos = buscarBoleto($bol,$conn);
 	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_reservar.php" method="post" onsubmit=" return validarInputs()">
		<input type="hidden" name="boleto" value="<?=$bol?>"><br>

		<div class="separardor_reclamo">
		<label>DNI del Cliente:</label><br>
		<select class="tamañoletraIngreso" name="dni">
			<?php
				foreach (listarCliente($conn) as $key => $value) {
					if($value[0]===$datos[0]){
						echo '<option value="'.$value[0].'" selected="">'.$value[0].'</option>';
					}
					else{
						echo '<option value="'.$value[0].'">'.$value[0].'</option>';
					}
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Codigo del Paquete de Tour:</label><br>
		<select class="tamañoletraIngreso" name="paquete">
			<?php
				foreach (listarPaquetesTour($conn) as $key => $value) {
					if($value[0]===$datos[1]){
						echo '<option value="'.$value[0].'" selected="">'.$value[0].'-'.$value[1].'</option>';
					}
					else{
						echo '<option value="'.$value[0].'">'.$value[0].'-'.$value[1].'</option>';
					}
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Tarjeta:</label><br>
		<select class="tamañoletraIngreso" name="tarjeta">
			<?php
				foreach (listarTarjeta($conn) as $key => $value) {
					if($value[0]===$datos[2]){
						echo '<option value="'.$value[0].'" selected="">'.$value[0].'</option>';
					}
					else{
						echo '<option value="'.$value[0].'">'.$value[0].'</option>';
					}
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Nro. de Tarjeta</label><br>
		<input type="text" name="nrotarjeta" id="nrotarjeta" value="<?=$datos[3]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>CVC</label><br>
		<input type="text" name="cvc" id="cvc" value="<?=$datos[4]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Fecha de Reserva</label><br>
		<input type="date" name="fecha" id="fecha" value="<?=$datos[5]?>"><br>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Actualizar">
		</div>
	</form>
	</div>

	<div class="centrado reclamo_boton">
		<a href="../../paginas/administrador.php">Volver</a><br>
	</div>
	<script>
	function validarInputs(){
        let nrtar=document.getElementById('nrotarjeta').value;
        let cv=document.getElementById('cvc').value;
        let fch=document.getElementById('fecha').value;


        if(isNaN(nrtar)||nrtar===""){
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
	</main>

	<?php 
	include '../../footer/footer3_Administrador.php';
	?>
</body>
</html>