<?php

/////// CONEXIÓN A LA BASE DE DATOS /////////
$host = 'localhost';
$basededatos = 'tercera';
$usuario = 'root';
$contraseña = '';

$conexion = new mysqli($host, $usuario,$contraseña, $basededatos);
if ($conexion -> connect_errno)
{
	die("Fallo la conexion:(".$conexion -> mysqli_connect_errno().")".$conexion-> mysqli_connect_error());
}

$tabla="";


$query = "SELECT usuarios.nombre, mascotas.nombre FROM usuarios INNER JOIN mascotas on mascotas.usuarios_id = usuarios.id";

if(isset($_POST['mascota']))
{
	$q=$conexion->real_escape_string($_POST['mascota']);
	$query = "SELECT usuarios.nombre, mascotas.nombre FROM usuarios INNER JOIN mascotas on mascotas.usuarios_id = usuarios.id WHERE usuarios.nombre OR mascotas.nombre WHERE LIKE '%".$q."%'";
}

$primera=$conexion->query($query);
if ($primera->num_rows > 0)
{
	$tabla.= 
	'<table class="table">
		<tr class="bg-primary">
			<td>Dueño</td>
			<td>Mascota</td>
		</tr>';

	while($filaPrimera = mysqli_fetch_array($primera))
	{
		$tabla.=
		'<tr>
			<td>'.$filaPrimera[0].'</td>
			<td>'.$filaPrimera[1].'</td>
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
