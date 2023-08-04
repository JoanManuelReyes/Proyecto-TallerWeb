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
		$datos= buscarGuia($cod,$conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_guias.php" method="POST" enctype="multipart/form-data"  onsubmit=" return validarInputs()">
		<input type="hidden" name="ID_guia" value="<?=$cod?>">

		<div class="separardor_reclamo">
		<label>Nombre del guia:</label><br>
		<input type="text" name="Nombre_guia" id="Nombre_guia"value="<?=$datos[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Foto del guia:</label><br>
		<input type="file" name="Foto_guia"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Descripcion del guia</label><br>
		<textarea name="Descripcion_guia" id="Descripcion_guia"><?=$datos[2]?></textarea><br>
		</div>

		<div class="separardor_reclamo">
		<label>Región en la que trabaja:</label><br>
		<select class="tamañoletraIngreso" name="Region" id="Region">
			<?php
				foreach (listarRegiones($conn) as $key => $value) {
					if($value[0]===$datos[3]){
						echo '<option value="'.$value[0].'" selected="">'.$value[0].'</option>';
					}
					else{
						echo '<option value="'.$value[0].'">'.$value[0].'</option>';
					}
				}
			?>
		</select><br>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Actualizar">
		</div>
	</form>
	</div>

	<script>
	function validarInputs(){
        let id=document.getElementById('ID_guia').value;
        let nombre=document.getElementById('Nombre_guia').value;
        let des=document.getElementById('Descripcion_guia').value;
        let reg=document.getElementById('Region').value;


        if(id===""){
        alert("Complete el ID del guía");
        return false;
        }
        else if(nombre===""){
            alert("Complete el nombre del guía")
            return false;
        }
         else if(des==="")  {
          alert("Complete la descripción");
          return false;
        }
         else if(reg==="")  {
          alert("Complete la región en la que trabaja el guía");
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