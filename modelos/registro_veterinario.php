<?php
	include_once('../conexion/conexion.php');

	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$colegio = $_POST['colegio'];
	$especialidad = $_POST['especialidad'];



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

	else{ 

	$insert_user = "INSERT INTO `usuarios` (`nombre`, `apellido`, `cedula`, `email`, `telefono`) VALUES ('$nombre','$apellido','$cedula','$email','$telefono')";

	$resultado = mysqli_query($conexion, $insert_user);

	$sSqlId = "SELECT MAX(id) as `id` FROM `tercera`.`usuarios`";

		if($respuesta = mysqli_query($conexion, $sSqlId)){
			foreach ($respuesta as $resp) {
				$id = $resp['id'];
			}
		}


	$insert_veterinario = "INSERT INTO `veterinarios` (`colegio`, `usuarios_id`) VALUES ('$colegio','$id')";

	$final = mysqli_query($conexion,$insert_veterinario);

	$query = "SELECT MAX(id) as id FROM `tercera`.`veterinarios`";

	if($respuesta = mysqli_query($conexion, $query)){
			foreach ($respuesta as $resp) {
				$veterinarios_id = $resp['id'];
			}
		}

	$insert_especialidades = "INSERT INTO `especialidades` (`tipo`, `veterinarios_id`) VALUES ('$especialidad','$veterinarios_id')";

	$final_insertion = mysqli_query($conexion,$insert_especialidades);

	echo "Registro exitoso";
	exit;

	}


	if (!$resultado) {
		echo "Error al conectarse";
	}


	mysqli_close($conexion);


#https://www.youtube.com/watch?v=tqCgL5Ed3RM

?>