<?php
	include_once('../conexion/conexion.php');

	$nombre = $_POST["nombre"];
	$altura = $_POST["altura"];
	$peso = $_POST["peso"];

	$insert_raza = "INSERT INTO `razas` (`nombre`, `altura`, `peso`) VALUES ('$nombre', '$altura', '$peso')";

	$resultado = mysqli_query($conexion, $insert_raza);

	echo "Registro exitoso";
	exit;



	if (!$resultado) {
		echo "Error al conectarse";
	}


	mysqli_close($conexion);


#https://www.youtube.com/watch?v=tqCgL5Ed3RM

?>raza