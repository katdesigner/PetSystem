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

	<h3>Bienvenido al registro de veterinarios</h3>
	<div class="divider"></div>
		<div class="row">
			<form class="col s12" action="../modelos/registro_veterinario.php" method="POST" id="formulario">
			  <div class="row">
			    <div class="input-field col s12 m6">
			    Nombre
			      <input id="nombre" name="nombre" type="text" class="validate">
			      <label for="nombre">
			      </label>
			    </div>
			    <div class="input-field col s12 m6">
			    Apellido
			      <input id="apellido" name="apellido" type="text" class="validate">
			      <label for="apellido"></label>
			    </div>
			  </div>
			  <div class="row">
			    <div class="input-field col s12 m4">
			    Cédula
			      <input id="cedula" type="number" name="cedula" class="validate">
			      <label for="cedula"></label>
			    </div>
			    <div class="input-field col s12 m4">
			    Teléfono
			      <input id="telefono" type="number" name="telefono" class="validate">
			      <label for="telefono"></label>
			    </div>
			    <div class="input-field col s12 m4">
			    Email
			      <input id="email" name="email" type="email" class="validate" placeholder="usuario@dominio.com">
			      <label for="email"></label>
			    </div>
			    <div class="input-field col s12 m6">
			    Colegio
			      <input id="colegio" name="colegio" type="text" class="validate">
			      <label for="colegio">
			      </label>
			    </div>
			    <!--Select que muestre todas las especialidades registradas-->
			    <div class="input-field col s12 m6">
			    Especialidad
			      <input id="especialidad" name="especialidad" type="text" class="validate">
			      <label for="especialidad"></label>
			    </div>
			    		
			    	</select>
			    </div>
			    <!--Un modal que registre otra especialidad (Puedo tenerlo en otro archivo e incluirlo en el index/ hacer igual con las razas de mascotas)-->


			    <div class="col s12">
				    <center>
				    <button type="submit" class="btn amber darken-4 top-space">Enviar</button>
						</center>
					</div>
			</form>
		</div>
	</form>
</div>



	<script src="../herramientas/jquery/jquery.min.js"></script>
	<script src="../herramientas/jquery/jquery.validate.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
  	<script type="text/javascript">
	$('.modal').modal();
  	</script>
  	<script type="text/javascript" src="../controladores/registro.js"></script>
  	<script type="text/javascript" src="../controladores/validationcliente.js"></script>
		
</body>
</html>