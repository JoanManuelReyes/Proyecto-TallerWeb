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
		$datos= buscarUsuario($cod,$conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_login.php" method="post" onsubmit=" return validarInputs()">
		<input type="hidden" name="identificador" value="<?=$cod?>">

		<div class="separardor_reclamo">
		<label>Email:</label><br>
		<input ttype="email" name="email" id="email" value="<?=$datos[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Contraseña:</label><br>
		<input type="password" name="contrasenia" id="contrasenia" value="<?=$datos[1]?>"><br>
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
        let email=document.getElementById('email').value;
        let contra=document.getElementById('contrasenia').value;


        if(email===""){
            alert("Ingrese el email del usuario");
            return false;
        }else if(contra==="")  {
	        alert("Ingrese la contraseña del usuario");
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