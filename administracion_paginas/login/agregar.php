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
		require '../../controlador/conexion.php';
		$conn=conectar();
		$codigo=buscarCodigoDisponibleUsuario($conn);

	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_login.php" method="post" onsubmit=" return validarInputs()">
		<div class="separardor_reclamo">
		<label>ID:</label><br>
		<input type="text" name="identificador" id="identificador" value="<?=$codigo[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Email:</label><br>
		<input type="email" name="email" id="email"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Contraseña:</label><br>
		<input type="password" name="contrasenia" id="contrasenia"><br>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Agregar">
		</div>
	</form>
	</div>
	<script>
	function validarInputs(){
        let codigo=document.getElementById('identificador').value;
        let email=document.getElementById('email').value;
        let contra=document.getElementById('contrasenia').value;


        if(isNaN(codigo)||codigo===""){
        alert("Complete bien el ID");
        return false;
        }else if(email===""){
            alert("Ingrese el email del usuario");
            return false;
        }else if(contra==="")  {
	        alert("Ingrese la contraseña del usuario");
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