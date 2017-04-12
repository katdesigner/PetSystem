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
<br>
<a class="btn btn-floating pulse blue  lighten-1" href="../index.php"><i class="material-icons">home</i></a>

	<h3>Buscar consulta</h3>
	<section>
			<input type="text" name="busqueda" id="busqueda" placeholder="Buscar...">
		</section>

		<section id="tabla_resultado">
		<!-- AQUI SE DESPLEGARA NUESTRA TABLA DE CONSULTA -->
		</section


</div>

</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  	<script type="text/javascript" src="../controladores/registro.js"></script>
</body>
</html>