<!DOCTYPE html>
<html>
<head>
	<title>Videojuegos</title>
</head>
<body bgcolor="#CEF6F5">

	<h1>COMPLETE SUS DATOS PERSONALES</h1>

	<br>

	<form action="conexion.php" method="POST">

		<label for="nombre">Nombre: </label>
			<input type="text" name="nombre"/>
		<br>

		<label for="apellido1">Primer apellido: </label>
			<input type="text" name="apellido1"/>
		<br>

		<label for="apellido2">Segundo apellido: </label>
			<input type="text" name="apellido2"/>
		<br>

		<p>SELECCIONE SU GENERO</p>

		<label for="genero"><input type="radio" name="genero" value="Masculino">Masculino</label>
		<br>
		<label for="genero"><input type="radio" name="genero" value="Femenino">Femenino</label>
		<br>
		<label for="genero"><input type="radio" name="genero" value="Otro">Otro</label>
		<br>
		<br>

		<input type="submit" name="enviar" value="Enviar Datos">

	</form>

</body>
</html>