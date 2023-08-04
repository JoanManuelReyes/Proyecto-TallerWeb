<?php
	session_start();
	require '../controlador/conexion.php';
	$conn = conectar();

	$correo = $_REQUEST['emailusuario'];
	$contra = $_REQUEST['contrausuario'];

	$fil = validarLogueo($correo,$contra,$conn);
	$tipo=obtenertipoLogueo($correo,$contra,$conn);

	if ($fil>0) {
		$_SESSION['emailusuario']= $correo;
			if ($tipo[3]==='Administrador'){
				header ('location: ../paginas/administrador.php');
			}else{
				header ('location: ../index.php');
			}
	}else{
		echo "<script>alert('Email o contraseña incorrecta'); window.history.back(); </script>";
	}
?>
