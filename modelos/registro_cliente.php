<?php
	include_once('../conexion/conexion.php');

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];

	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email'");

	if (mysqli_num_rows($verificar_usuario) > 0) {
		echo 'Usuario ya registrado';
		exit;
	}

	$verificar_cedula = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula'");

	if (mysqli_num_rows($verificar_cedula) > 0) {
		echo 'Usuario ya registrado';
		#recargar página de formulario
		exit;
	}

	else{ $insert_user = "INSERT INTO `usuarios` (`nombre`, `apellido`, `cedula`, `email`, `telefono`) VALUES ('$nombre','$apellido','$cedula','$email','$telefono')";

	$resultado = mysqli_query($conexion, $insert_user);

	echo "Registro exitoso";
	exit;

	}


	if (!$resultado) {
		echo "Error al conectarse";
	}


	mysqli_close($conexion);


#https://www.youtube.com/watch?v=tqCgL5Ed3RM

?>