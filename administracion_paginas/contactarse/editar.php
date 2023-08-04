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
		$cod=$_REQUEST['identificador'];
		include_once '../../controlador/conexion.php';
		$conn=conectar();
		$datos= buscarContacto($cod,$conn);
	?>
	<div class="centrado card_reclamos">
	<form action="../../procesamiento_administrador/proceso_contactarse.php" method="post" onsubmit=" return validarInputs()">
		<input type="hidden" name="identificador" value="<?=$cod?>">

		<div class="contenidoColumnas separardor_reclamo">
		<label>DNI del Cliente</label>
		<select name="DNI" id="DNI">
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

		<div class="contenidoColumnas separardor_reclamo">
		<label>Asunto:</label>
		<input type="text" name="asunto" id="asunto" value="<?=$datos[1]?>"><br>
		</div>

		<div class="contenidoColumnas separardor_reclamo">
		<label>Descrición:</label>
		<textarea name="descripcion" id="descripcion" placeholder="<?=$datos[2]?>"></textarea><br>
		</div>
		<div class="diseñoEnviar">
		<input type="submit" name="accion" value="Actualizar">
		</div>
	</form>
	</div>

	<div class="centrado reclamo_boton">
		<a href="../../administrador.php">Volver</a><br>
	</div>
	<script>
	function validarInputs(){
        let dni=document.getElementById('DNI').value;
        let snt=document.getElementById('asunto').value;
        let des=document.getElementById('descripcion').value;

		if(snt===""){
            alert("Complete el asunto")
            return false;
        }
         else if(dni===""){
          alert("Seleccione un DNI del cliente");
          return false;
        }
         else if(des==="")  {
          alert("Complete la descripción");
          return false;
        }
        
    }
	</script>
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