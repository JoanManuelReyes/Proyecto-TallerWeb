<?php 
	require '../controlador/conexion.php';
	$conn = conectar();
	$nro=conectarboleto($conn);

		$dni = $_POST['dni'];
		$paq = $_POST['paquete'];
		$tar = $_POST['tarjeta'];
		$nrotar = $_POST['nrotarjeta'];
		$cvc = $_POST['cvc'];
		$fech =$_POST['fecha'];
		agregarBoleto($nro[0],$dni,$paq,$tar,$nrotar,$cvc,$fech,$conn);

	header('location:../index.php');
	
 ?>