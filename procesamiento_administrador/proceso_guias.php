<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='eliminar'){
		$id=$_REQUEST['identificador'];
		eliminarGuia($id,$conn);
	}

	if($action === 'Actualizar'){
		$ID_guia=$_POST['ID_guia'];
		$Nombre_guia=$_POST['Nombre_guia'];
		$Descripcion_guia=$_POST['Descripcion_guia'];
		$Region=$_POST['Region'];
		if(!empty($_FILES['Foto_guia']['name'])){
			$Foto_guia=$_FILES['Foto_guia']['name'];
			$ruta=$_FILES['Foto_guia']['tmp_name'];
			$laruta='imagenes_guias/'.$Foto_guia;
			copy($ruta, '../'.$laruta);
			actualizarTodoGuia($ID_guia,$Nombre_guia,$laruta,$Descripcion_guia,$Region,$conn);
		}else{
			actualizarGuia($ID_guia,$Nombre_guia,$Descripcion_guia,$Region,$conn);
		}
	}

	header('location:../administracion_paginas/guias/listar.php');
?>