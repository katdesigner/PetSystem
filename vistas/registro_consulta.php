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

	<h3>Bienvenido al registro de consultas</h3>

	<div class="row">
		<form class="col s12" action="../modelos/registro_mascota.php" method="POST" id="petform">
			<div class="row">
				<h5>Registra una consulta</h5>
				<div class="input-field col s12">
				Cédula del dueño
					<input id="cedula" name="cedula" type="number" class="validate">
					<label for="cedula">
					</label>
				</div>

				<div class="input-field col s12"><!--Acá se deben cargar las mascotas segpún la cédula ingresada por el usuario, se debe ejecutar tomando la cédula del usuario ONKEYUP -->
				Seleccione mascota
				  <div class="input-field col s12">
				    <select id="mascota" name="mascota" class="browser-default">
				      <option value="" >Seleccione</option>
				    </select>
				  </div>

				<div class="input-field col s12"><!--Acá se cargan todos los nombres de los veterinarios-->
				Seleccione veterinario
				  <div class="input-field col s12">
				    <select id="veterinario" name="veterinario" class="browser-default">
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
    	$('#veterinario, #mascota').material_select();
     });
  	</script>
	<script type="text/javascript" src="../controladores/veterinarios.js"></script>
	<script type="text/javascript" src="../controladores/mascota_consulta.js"></script>


</body>
</html>
