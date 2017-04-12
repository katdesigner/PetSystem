<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="herramientas/materialize/css/mystyle.css">

	<title>Clinica Pets</title>
</head>
<body style="background-color: <?php print  $_COOKIE["color"]; ?>">
<div class="container">
	<center>

    <div class="row">
		<div class="valign-wrapper blue  lighten-1 s12 m8 rounder z-depth-2 top-space">
		  <h1 class="valign center-align white-text">Bienvenido a Clínica Pets, la mejor opción de cuidados para tus mascotas</h1>
		 </div>
	</div>
	<div class="row">
				<a class="btn amber darken-4  " href="vistas/registro_cliente.php">Registrar cliente</a>
				<a class="btn amber darken-4 " href="vistas/registro_veterinario.php">Registrar veterinario</a>
				<a class="btn amber darken-4 " href="vistas/registro_mascota.php">Registrar mascota</a>
	</div>
	<div class="row">
				<a class="btn amber darken-4 s12 m6" href="vistas/registro_raza.php">Registrar raza</a>
				<a class="btn amber darken-4 s12 m6" href="vistas/registro_consulta.php">Registrar consulta</a>

	</div>
	<div class="row">
				<a class="btn blue darken-4 col push-s2 s8" href="vistas/buscador.php">Buscar consultas</a>
	</div>
</div>
</center>

<center>
<a href="#modal2" class="btn white black-text">Cambiar color de fondo</a>
</center>

<div id="modal2" class="modal row">
	<form method="POST" action="cookies/cookies.php" class="">
		<div class="input-field col s6" style="height: 80px">
			Desea el fondo:
			<input class="with-gap" name="color" type="radio" id="azul" value="#87e3fd" />
			<label for="azul">Azul</label>
			<input class="with-gap" name="color" type="radio" id="amarillo" value="#f9ed9d" />
			<label for="amarillo">Amarillo</label>
			<br>
			<input type="submit" value="Cambiar" class="btn light-blue">
		</div>		
	</form>
</div>

	<script type="text/javascript" src="herramientas/jquery/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  	<script type="text/javascript">
	$('.modal').modal();
  	</script>
</body>
</html>