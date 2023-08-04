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
		$cod=$_REQUEST['identificador'];
		include_once '../../controlador/conexion.php';
		$conn=conectar();
		$datos= buscarContacto($cod,$conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_contactarse.php" method="post" onsubmit=" return validarInputs()">
		<input type="hidden" name="identificador" value="<?=$cod?>">

		<div class="separardor_reclamo">
		<label>Nombre cliente:</label><br>
		<input type="text" name="nombre" id="nombre" value="<?=$datos[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Email:</label><br>
		<input type="email" name="email" id="email" value="<?=$datos[1]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Teléfono:</label><br>
		<input type="text" name="telefono" id="telefono" value="<?=$datos[2]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>DNI:</label><br>
		<input type="text" name="DNI" id="DNI" value="<?=$datos[3]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Asunto:</label><br>
		<input type="text" name="asunto" id="asunto" value="<?=$datos[4]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Descrición:</label><br>
		<textarea name="descripcion" id="descripcion"><?=$datos[5]?></textarea><br>
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
        let nombre=document.getElementById('nombre').value;
        let email=document.getElementById('email').value;
        let telefono=document.getElementById('telefono').value;
        let dni=document.getElementById('DNI').value;
        let snt=document.getElementById('asunto').value;
        let des=document.getElementById('descripcion').value;

		if(snt===""){
            alert("Complete el asunto")
            return false;
        }else if(nombre===""){
            alert("Ingrese el nombre del cliente");
            return false;
        }else if(email===""){
            alert("Ingrese el email de cliente");
            return false;
        }else if(isNaN(telefono)||telefono===""){
            alert("Ingrese el teléfono de cliente");
            return false;
        }
        else if(isNaN(dni)||dni===""){
            alert("Ingrese un DNI del cliente");
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