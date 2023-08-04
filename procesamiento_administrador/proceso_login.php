<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='Agregar'){
		$id=$_REQUEST['identificador'];
		$email=$_REQUEST['email'];
		$contra=$_REQUEST['contrasenia'];
		agregarUsuario($id,$email,$contra,$conn);
	}
	
	if($action==='eliminar'){
		$id=$_REQUEST['identificador'];
		eliminarUsuario($id,$conn);
	}

	if($action==='Actualizar'){
		$id=$_REQUEST['identificador'];
		$email=$_REQUEST['email'];
		$contra=$_REQUEST['contrasenia'];
		actualizarUsuario($id,$email,$contra,$conn);
	}

	header('location:../administracion_paginas/login/listar.php');
?>