<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="../herramientas/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../herramientas/materialize/css/mystyle.css">

	<title>Clinica Pets</title>
</head>
<body style="background-color:<?php print  $_COOKIE["color"]; ?>">
<div class="container">
<br>
<a class="btn btn-floating pulse blue  lighten-1" href="../index.php"><i class="material-icons">home</i></a>

	<h3>Bienvenido al registro de mascotas</h3>

	<div class="row">
		<form class="col s12" action="../modelos/registro_mascota.php" method="POST" id="petform">
			<div class="row">
				<h5>Registra una mascota</h5>
				<div class="input-field col s12">
				Nombre de la mascota
					<input id="nombre_mascota" name="nombre_mascota" type="text" class="validate">
					<label for="nombre_mascota">
					</label>
				</div>
				<div class="input-field col s12">
				Cedula del dueño
					<input id="cedula_cliente" name="cedula_cliente" type="number" class="validate">
					<label for="cedula_cliente">
					</label>
				</div>
				Seleccione raza
				  <div class="input-field col s12">
				    <select id="raza" name="raza" class="browser-default">
				      <option value="" >Seleccione</option>
				    </select>
				  </div>
			</div>
			<div class="col s12">
				<center>
					<button type="submit" class="btn amber darken-4 top-space">Enviar</button>
				</center>
			</div>								
		</form>
	</div>

</div>
	<script type="text/javascript" src="../herramientas/jquery/jquery.min.js"></script>
  	<script src="../herramientas/materialize/js/materialize.min.js"></script>
  	<script type="text/javascript">
   	$(document).ready(function() {
		$('.modal').modal();
    	$('#raza').material_select();
     });
  	</script>
	<script type="text/javascript" src="../controladores/razas.js"></script>

	
</body>
</html>
