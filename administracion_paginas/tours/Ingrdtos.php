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
		$codigo=buscarCodigoDisponibleTour($conn);

	?>
	<div class="centrado card_reclamos">
	<form action="insertar.php" method="POST" enctype="multipart/form-data"  onsubmit=" return validarInputs()">
		<div class="separardor_reclamo">
		<label>Codigo del tour</label><br>
		<input type="text" name="ID_tour" id="ID_tour" value="<?=$codigo[0]?>"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Nombre del tour</label><br>
		<input type="text" name="Nombre_tour" id="Nombre_tour"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Region del tour</label><br>
		<select class="tamañoletraIngreso" name="Region_tour">
			<?php
			foreach (listarRegiones($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="separardor_reclamo">
		<label>Descripción del tour</label><br>
		<textarea name="Descripcion_tour" id="Descripcion_tour" placeholder="Describe el tour..."></textarea><br>
		</div>

		<div class="separardor_reclamo">
		<label>Foto del tour</label><br>
		<input type="file" name="Foto_tour"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Cantidad de días para el tour</label><br>
		<input type="text" name="Dias_tour" id="Dias_tour"><br>
		</div>

		<div class="separardor_reclamo">
		<label>Precio del tour</label><br>
		<input type="text" name="Precio_tour" id="Precio_tour"><br>
		</div>

		<div class="separardor_reclamo">
		<label>ID del Guia:</label><br>
		<select class="tamañoletraIngreso" name="Codigo_guia">
			<?php
			foreach (listarGuia($conn) as $key => $value) {
			?>
				<option value="<?=$value[0]?>"><?=$value[0]?>-<?=$value[4]?></option>
			<?php
				}
			?>
		</select><br>
		</div>

		<div class="diseñoEnviar">
		<input type="submit" name="btn btn-primary" value="Agregar">
		</div>
	</form>	
	</div>
	<script>
	function validarInputs(){
        let id=document.getElementById('ID_tour').value;
        let nombre=document.getElementById('Nombre_tour').value;
        let des=document.getElementById('Descripcion_tour').value;
        let per=document.getElementById('Personas_tour').value;
        let dis=document.getElementById('Dias_tour').value;
        let pre=document.getElementById('Precio_tour').value;

        if(id===""){
        alert("Complete el ID del tour");
        return false;
        }
        else if(nombre===""){
            alert("Complete el nombre del tour")
            return false;
        }
        else if(des===""){
            alert("Complete la descrípción del tour")
            return false;
        }
         else if(isNaN(per)||per===""||per<1)  {
          alert("Complete bien la cantidad de personas en el tour");
          return false;
        }
        else if(isNaN(dis)||dis===""||dis<1)  {
          alert("Complete bien la cantidad de días en el tour");
          return false;
        }
         else if(isNaN(pre)||pre===""||pre<1)  {
          alert("Complete bien el precio del tour");
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