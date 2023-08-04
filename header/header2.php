<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/estilos.css">
	<title></title>
</head>
<body>
	<header>
		<img  src="../Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="../index.php">Inicio</a>
		   <a href="Nosotros.php">¿Quiénes somos?</a>
		   <a href="paquetes.php">Paquetes de tours</a>
		   <a href="GuiasTuristicos.php">Nuestros guias</a>
		   <a href="Contactanos.php">Contactanos</a>
		   <a href="iniciar.php">Iniciar Sesion</a>
		   
		</nav>
		
			<form method="post" class="form-nav" action="RegionCosta.php">
				<select name="Departamentos" size="" select onChange="window.open(this.options[this.selectedIndex].value,'_self')">
					<option selected>Departamentos</option>
					<option value="Cusco.php">Cuzco</option>
					<option value="Tambopata.php">Tambopata</option>
					<option value="Apurimac.php">Apurimac</option>
					<option value="CostaVerde.php">Lima-Costa Verde</option>
					<option value="Paracas.php">Paracas</option>
					<option value="Chanchamayo.php">Chanchamayo</option>
					<option value="Puno.php">Puno</option>
				</select>
			</form>


	</header>
</body>
</html>