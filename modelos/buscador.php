<?php

/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'clinica_veterinaria';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$tabla="";
$query="SELECT nombre FROM mascota";

if(isset($_POST['mascota']))
{
	$q=$conexion->real_escape_string($_POST['mascota']);
	$query="SELECT * FROM mascota WHERE 
		nombre LIKE '%".$q."%'";
}

$buscarMascota=$conexion->query($query);
if ($buscarMascota->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>Nombre</td>
			<td>Estado</td>
		</tr>';

	while($filaMascota= $buscarMascota->fetch_assoc())
	{
		$tabla.=
		'<tr>
			<td>'.$filaMascota['nombre'].'</td>
			<td>    -Activo</td>
		 </tr>
		';
	}

	$tabla.='</table>';
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;
?>
