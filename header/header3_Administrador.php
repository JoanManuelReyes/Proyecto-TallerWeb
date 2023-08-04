<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../css/estilos.css">
	<title></title>
</head>
<body>
	<header>
		<img  src="../../Imagenes_header/imagen1.jpeg">
		<nav>
		   <a href="../../index.php">Inicio</a>
		   <a href="../../paginas/Nosotros.php">¿Quiénes somos?</a>
		   <a href="../../paginas/paquetes.php">Paquetes de tours</a>
		   <a href="../../paginas/GuiasTuristicos.php">Nuestros guias</a>
		   <a href="../../paginas/Contactanos.php">Contactanos</a>
		   <a href="../../paginas/Ejercicios1JS.php">Ejercicios JS</a>
		   <a href="../../paginas/EjercicioPHP1.php">Ejercicios PHP</a>
		   <a href="../../paginas/iniciar.php">Iniciar Sesion</a>
		   
		</nav>
		
			<form method="post" class="form-nav" action="RegionCosta.php">
				<select name="Departamentos" size="" select onChange="window.open(this.options[this.selectedIndex].value,'_self')">
					<option selected>Departamentos</option>
					<option value="../../paginas/Cusco.php">Cuzco</option>
					<option value="../../paginas/Tambopata.php">Tambopata</option>
					<option value="../../paginas/Apurimac.php">Apurimac</option>
					<option value="../../paginas/CostaVerde.php">Lima-Costa Verde</option>
					<option value="../../paginas/Paracas.php">Paracas</option>
					<option value="../../paginas/Chanchamayo.php">Chanchamayo</option>
					<option value="../../paginas/Puno.php">Puno</option>
				</select>
			</form>


	</header>
</body>
</html>