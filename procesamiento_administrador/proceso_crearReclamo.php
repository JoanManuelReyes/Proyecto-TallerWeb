<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='Enviar'){
		$cod=$_REQUEST['codigo'];
		$nrobol=$_REQUEST['boleto'];
		$fecha=$_REQUEST['fecha'];
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$dni=$_REQUEST['DNI'];
		$telefono=$_REQUEST['telefono'];
		$email=$_REQUEST['email'];
		$dir=$_REQUEST['direccion'];
		$des=$_REQUEST['descripcion'];
		agregarReclamo($cod,$nrobol,$fecha,$nombre,$apellido,$dni,$telefono,$email,$dir,$des,$conn);
	}
	header('location:../paginas/LibroReclamos.php');
?>