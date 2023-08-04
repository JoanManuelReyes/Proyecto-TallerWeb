<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='Agregar'){
		$id=$_REQUEST['identificador'];
		$nombre=$_REQUEST['nombre'];
		$email=$_REQUEST['email'];
		$tel=$_REQUEST['telefono'];
		$dni=$_REQUEST['DNI'];
		$snt=$_REQUEST['asunto'];
		$mns=$_REQUEST['descripcion'];
		agregarContacto($id,$nombre,$email,$tel,$dni,$snt,$mns,$conn);
	}
	
	if($action==='eliminar'){
		$id=$_REQUEST['identificador'];
		eliminarContacto($id,$conn);
	}

	if($action==='Actualizar'){
		$id=$_REQUEST['identificador'];
		$nombre=$_REQUEST['nombre'];
		$email=$_REQUEST['email'];
		$tel=$_REQUEST['telefono'];
		$dni=$_REQUEST['DNI'];
		$snt=$_REQUEST['asunto'];
		$mns=$_REQUEST['descripcion'];
		actualizarContacto($id,$nombre,$email,$tel,$dni,$snt,$mns,$conn);
	}

	header('location:../administracion_paginas/contactarse/listar.php');
?>