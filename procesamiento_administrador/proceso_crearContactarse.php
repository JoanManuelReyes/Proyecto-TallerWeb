<?php 
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$codigo=buscarCodigoDisponibleContactarse($conn);

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$dni=$_POST['DNI'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];

	agregarContacto($codigo[0],$nombre,$email,$telefono,$dni,$asunto,$mensaje,$conn);
	
	header('location:../paginas/Contactanos.php');
?>
