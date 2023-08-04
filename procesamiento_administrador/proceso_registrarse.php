<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='Agregar'){
		$nombre=$_REQUEST['nombre'];
		$apellido=$_REQUEST['apellido'];
		$dni=$_REQUEST['DNI'];
		$telefono=$_REQUEST['telefono'];
		$email=$_REQUEST['email'];
		$direccion=$_REQUEST['direccion'];
		$contra=$_REQUEST['contrasenia'];
		crearCuenta($nombre,$apellido,$dni,$telefono,$email,$direccion,$contra,$conn);
	}

	header('location: ../paginas/iniciar.php');
?>
