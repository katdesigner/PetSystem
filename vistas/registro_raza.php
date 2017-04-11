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
<body style="background-color:<?php print  $_COOKIE["color"]; ?>">
<div class="container">
<br>
<a class="btn btn-floating pulse blue  lighten-1" href="../index.php"><i class="material-icons">home</i></a>

	<h3>Bienvenido al registro de razas</h3>

	<div class="row">
		<form class="col s12" action="../modelos/registro_raza.php" method="POST">
			<div class="row">
				<h5>Registra una raza</h5>
				<div class="input-field col s12">
				Nombre de la raza
					<input id="nombre" name="nombre" type="text" class="validate">
					<label for="nombre">
					</label>
				</div>
				<div class="input-field col s12">
				Altura
					<input id="altura" name="altura" type="text" class="validate">
					<label for="altura">
					</label>
				</div>
				
				<div class="input-field col s12">
				Peso
					<input id="peso" name="peso" type="text" class="validate">
					<label for="peso">
					</label>
				</div>
				<div class="col s12">
				<center>
					<button type="submit" class="btn amber darken-4 top-space">Enviar</button>
				</center>
			</div>		
			</div>								
		</form>
	</div>

</div>
	<script type="text/javascript" src="herramientas/jquery/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  	<script type="text/javascript">
	$('.modal').modal();
  	</script>
	<script type="text/javascript" src="../controladores/validationmascota.js"></script>
	<script type="text/javascript" src="../controladores/razas.js"></script>

</body>
</html>
