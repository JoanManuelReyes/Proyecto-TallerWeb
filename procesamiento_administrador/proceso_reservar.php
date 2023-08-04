<?php 
	require '../controlador/conexion.php';
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action === 'Agregar') {
		$bol = $_REQUEST['boleto'];
		$dni = $_REQUEST['dni'];
		$paq = $_REQUEST['paquete'];
		$tar = $_REQUEST['tarjeta'];
		$nrotar = $_REQUEST['nrotarjeta'];
		$cvc = $_REQUEST['cvc'];
		$fech = $_REQUEST['fecha'];
		agregarBoleto($bol,$dni,$paq,$tar,$nrotar,$cvc,$fech,$conn);
	}

	if ($action === 'eliminar') {
		$bol = $_REQUEST['boleto'];
		eliminarBoleto($bol,$conn);
	}

	if($action === 'Actualizar'){
		$bol = $_REQUEST['boleto'];
		$dni = $_REQUEST['dni'];
		$paq = $_REQUEST['paquete'];
		$tar = $_REQUEST['tarjeta'];
		$nrotar = $_REQUEST['nrotarjeta'];
		$cvc = $_REQUEST['cvc'];
		$fech = $_REQUEST['fecha'];
		actualizarTodoBoleto($bol,$dni,$paq,$tar,$nrotar,$cvc,$fech,$conn);
		}
	header('location:../administracion_paginas/reservar/listar.php');

 ?>