<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='Agregar'){
		$cod=$_REQUEST['codigo'];
		$nrobol=$_REQUEST['boleto'];
		$dni=$_REQUEST['DNI'];
		$des=$_REQUEST['descripcion'];
		agregarReclamo($cod,$nrobol,$dni,$des,$conn);
	}
	
	if($action==='eliminar'){
		$cod=$_REQUEST['codigo'];
		eliminarReclamo($cod,$conn);
	}

	if($action==='Actualizar'){
		$cod=$_REQUEST['codigo'];
		$nrobol=$_REQUEST['boleto'];
		$dni=$_REQUEST['DNI'];
		$des=$_REQUEST['descripcion'];
		actualizarReclamo($cod,$nrobol,$dni,$des,$conn);
	}

	header('location:../administracion_paginas/reclamos/listar.php');
?>