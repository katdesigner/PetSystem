<?php
	include_once('../conexion/conexion.php');

	$mascota = $_POST['mascota'];
	$veterinario = $_POST['veterinario'];

	$insert_consulta = "INSERT INTO `consultas` (`mascotas_id`,`veterinarios_id`) VALUES ('$mascota','$veterinario')";


	$registro = mysqli_query($conexion,$insert_consulta);

	if (!$registro) {
		echo "Error en el registro";
	}
	else{
		echo"Registro correcto";
	}

	mysqli_close($conexion);


