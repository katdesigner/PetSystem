<?php
	include_once('../conexion/conexion.php');

	$nombre_mascota = $_POST['nombre_mascota'];
	$tipo_raza = $_POST['tipo_raza'];
	$cedula_cliente = $_POST['cedula_cliente'];


	$verificar_mascota = mysqli_query($conexion, "SELECT * FROM mascotas WHERE nombre = '$nombre_mascota'");

	if (mysqli_num_rows($verificar_mascota) > 0) {
		echo"Nombre existente";
		#recargar página de formulario
		exit;
	}

	$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE cedula = '$cedula_cliente'");

	if (mysqli_num_rows($verificar_usuario) < 1) {
		echo"No existe el usuario";
		#enviar a registro_cliente.html
		exit;
	}


	$query = "SELECT id FROM usuarios WHERE cedula = '$cedula_cliente'";

	$resultado = mysqli_query($conexion,$query);

	$row = mysqli_fetch_array($resultado);

	$cliente = $row["id"];


	$insert_mascota = "INSERT INTO `mascotas` (`nombre`,`tipo_animal`,`tipo_raza`,`cliente`) VALUES ('$nombre_mascota','$tipo_animal', '$tipo_raza' ,'$cliente')";


	$registro = mysqli_query($conexion,$insert_mascota);

	if (!$registro) {
		echo $tipo_raza;
	}
	else{
		echo"Registro correcto";
	}

	mysqli_close($conexion);


