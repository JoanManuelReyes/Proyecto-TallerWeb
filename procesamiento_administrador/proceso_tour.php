<?php
	include_once '../controlador/conexion.php';
	$conn=conectar();
	$action=$_REQUEST['accion'];

	if($action==='eliminar'){
		$id=$_REQUEST['identificador'];
		eliminarTour($id,$conn);
	}

	if($action === 'Actualizar'){
		$ID_tour=$_POST['ID_tour'];
		$Nombre_tour=$_POST['Nombre_tour'];
		$Region=$_POST['Region_tour'];
		$Descripcion_tour=$_POST['Descripcion_tour'];
		$Dias_tour=$_POST['Dias_tour'];
		$Precio_tour=$_POST['Precio_tour'];
		$Codigo_guia=$_POST['Codigo_guia'];
		if(!empty($_FILES['Foto_tour']['name'])){
			$Foto_tour=$_FILES['Foto_tour']['name'];
			$ruta=$_FILES['Foto_tour']['tmp_name'];
			$laruta='imagenes/'.$Foto_tour;
			copy($ruta, '../'.$laruta);
			actualizarTodoTour($ID_tour,$Nombre_tour,$Region,$Descripcion_tour,$laruta,$Dias_tour,$Precio_tour,$Codigo_guia,$conn);
		}else{
			actualizarTour($ID_tour,$Nombre_tour,$Region,$Descripcion_tour,$Dias_tour,$Precio_tour,$Codigo_guia,$conn);
		}
	}

	header('location:../administracion_paginas/tours/listar.php');
?>