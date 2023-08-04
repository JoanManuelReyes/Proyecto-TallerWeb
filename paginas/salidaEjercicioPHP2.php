<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="stylesheet" href="../css/estilo-ejerciciosPHP.css">
</head>
<body>
	<?php 
    include '../header/header3_AdministradoInicio.php';
    ?>

<main>
<?php
	echo "<link rel='stylesheet' href='../usocss.css'>";

	$da = $_REQUEST['datos'];
	if ($da == '') {
        echo "<script language='javascript'>alert('Es obligatorio ingresar un numero');</script>";
        echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    }

    else if (is_numeric($da)) {
    	if ($da<=1) {
    	echo "<script language='javascript'>alert('Colocar solo un numero que sea mayor a 0');</script>";
    	echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    	}
    	else{

	    	for ($i=0; $i<$da ; $i++) { 
			$dato[$i] = random_int(20, 100);
			}

			for ($i=0; $i<$da ; $i++) {
				$num[$i]=$dato[$i]; 
				$residuo=0;
				$sum = 0;
			    while($num[$i] > 0){
			        $residuo = $num[$i]% 10;
			        $num[$i] =floor( $num[$i] / 10);
			        $sum = $sum + $residuo;
					$dataso[$i] = $sum;
				}

			}

			//Generar tabla
			
			echo "<form class='contenido-columnas centrado marco item-footer padding-direccion logo-tamaño tabla'>";
				echo "<table class='centrado'>";
					echo "<tr>";
						echo "<td>Número</td>";
						echo "<td>Suma de digitos</td>";
						echo "<td>Descripcion</td>";
					echo "</tr>";
				for ($i=0; $i<$da ; $i++) {
					echo "<tr>";
						echo "<td>$dato[$i]</td>";
						echo "<td>$dataso[$i]</td>";
					if ($dataso[$i]%2==0){
						echo "<td>Par</td>";
					}
					else {				
						echo "<td>Impar</td>";
						}
					echo "</tr>";
				}
				echo "</table>";
			echo "</form>";
    		}
		}
    else {
    	echo "<script language='javascript'>alert('Solo puede ingresar valores numerico');</script>";
    	echo "<a class='centrado contenido-columnas item-footer tamaniofont padding-direccion' href='EjercicioPHP2.php'>Vuelve a intentarlo</a>";
    }
?>
	<div class="desplazamientoEjercicios contenido-columnas">
	    <a href="EjercicioPHP1.php">Ejercicio 1</a>
	    <a href="EjercicioPHP3.php">Ejercicio 3</a>
    </div>
</main>

	<?php 
    include '../footer/footer2.php';
    ?>
</body>
</html>



