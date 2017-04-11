<?php 
	include_once('../conexion/conexion.php');

	$sSql = "SELECT id, nombre FROM `mascotas`";
	$count = 0;

	if ($respuesta = mysqli_query($conexion, $sSql)) {
		while ($resp = mysqli_fetch_array($respuesta)) {
			$r[$count]['nombre'] = $resp['nombre'];
			$r[$count]['id'] = $resp['id'];
			$count++;
		}
	}
	
	$r = json_encode($r);
	
	echo $r;
 ?>