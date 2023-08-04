<?php 
	include_once '../../controlador/conexion.php';
	$conn=conectar();

$ID_guia=$_POST['ID_guia'];
$Nombre_guia=$_POST['Nombre_guia'];
$Descripcion_guia=$_POST['Descripcion_guia'];
$Region=$_POST['Region'];
$Foto_guia=$_FILES['Foto_guia']['name'];
$ruta=$_FILES['Foto_guia']['tmp_name'];
$laruta='imagenes_guias/'.$Foto_guia;
copy($ruta, '../../'.$laruta);
agregarGuia($ID_guia,$Nombre_guia,$laruta,$Descripcion_guia,$Region,$conn);

header('location:listar.php');

?>