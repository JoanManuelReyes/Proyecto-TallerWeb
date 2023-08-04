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
		$cod=$_REQUEST['codigo'];
		include_once '../../controlador/conexion.php';
		$conn=conectar();
		$datos= buscarReclamo($cod,$conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_reclamo.php" method="post" onsubmit=" return validarInputs()">
		<input type="hidden" name="codigo" value="<?=$cod?>">
		<div class="separardor_reclamo">
		<label>Boleto de Reserva:</label><br>
		<input type="text" name="boleto" id="boleto" value="<?=$datos[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Fecha de Vuelo:</label><br>
		<input type="date" name="fecha" id="fecha" value="<?=$datos[1]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Nombre:</label><br>
		<input type="text" name="nombre" id="nombre" value="<?=$datos[2]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Apellido:</label><br>
		<input type="text" name="apellido" id="apellido" value="<?=$datos[3]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>DNI del Cliente:</label><br>
		<input type="text" name="DNI" id="DNI" value="<?=$datos[4]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Teléfono del Cliente:</label><br>
		<input type="text" name="telefono" id="telefono" value="<?=$datos[5]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Email del Cliente:</label><br>
		<input type="email" name="email" id="email" value="<?=$datos[6]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Dirección del Cliente:</label><br>
		<input type="text" name="direccion" id="direccion" value="<?=$datos[7]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Descripción:</label><br>
		<textarea name="descripcion" id="descripcion"><?=$datos[8]?></textarea><br>
		</div>
		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Actualizar">
		</div>
	</form>
	</div>

	<script>
	function validarInputs(){
        let boleto=document.getElementById('boleto').value;
        let fecha=document.getElementById('fecha').value;
        let nombre=document.getElementById('nombre').value;
        let apellido=document.getElementById('apellido').value;
        let dni=document.getElementById('DNI').value;
        let telefono=document.getElementById('telefono').value;
        let email=document.getElementById('email').value;
        let direccion=document.getElementById('direccion').value;     
        let des=document.getElementById('descripcion').value;

		if(boleto===""){
            alert("Seleccione un boleto")
            return false;
        }
        else if(isNaN(boleto)||boleto===""){
            alert("Escriba un número de boleto")
            return false;
        }
         else if(fecha===""){
          alert("Escriba una fecha");
          return false;
        }
        else if(nombre===""){
          alert("Escriba el nombre del cliente");
          return false;
        }
        else if(apellido===""){
          alert("Escriba el apellido del cliente");
          return false;
        }
        else if(isNaN(dni)||dni===""){
          alert("Escriba un DNI del cliente");
          return false;
        }
        else if(isNaN(telefono)||telefono===""){
          alert("Escriba el teléfono del cliente");
          return false;
        }else if(email===""){
          alert("Escriba el email del cliente");
          return false;
        }else if(direccion===""){
          alert("Escriba la dirección del cliente");
          return false;
        }
         else if(des==="")  {
          alert("Complete la descripción");
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