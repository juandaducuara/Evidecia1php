<!DOCTYPE html>
<html>

<head>
	<title>Formulario registro Comprador</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pagina d venta de vehiuclos">
	<meta name="keywords" content="Autos,Motos,Repuestos">
	<meta name="author" content="Juan Ducuara">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<form action="" method="GET">
		<h2>Formulario de Registro</h2>

		<label for="nombre">Nombre:</label>
		<input type="text" id="nombre" name="nombre" required maxlength=20>

		<label for="apellido">Apellido:</label>
		<input type="text" id="apellido" name="apellido" required maxlength=20>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required maxlength=50>

		<label for="usuario">Usuario:</label>
		<input type="text" id="usuario" name="usuario" required maxlength=20>

		<label for="password">Contraseña:</label>
		<input type="password" id="password" name="password" required maxlength=16 minlength=8>

		<label for="lang">Genero:</label>
		<select name="genero" id="lang">
			<option value="masculino">Masculino</option>
			<option value="femenino">Femenino</option>
			<option value="otro">Otro</option>
		</select>

		<label for="cel">Telefono celular:</label>
		<input type="number" id="cel" name="cel" required maxlength=20>

		<input type="submit" value="Enviar">
		<input type="reset" value="Limpiar">
	</form>
	<?php
	$nombre = $_REQUEST['nombre'];
	if ($nombre != "") {
		$apellido = $_REQUEST['apellido'];
		$email = $_REQUEST['email'];
		$usuario = $_REQUEST['usuario'];
		$clave = $_REQUEST['password'];
		$genero = $_REQUEST['genero'];
		$celular = $_REQUEST['cel'];
		echo "<h2> Nombre : " . $nombre . "</h2>";
		echo "<h2> Apellido : " . $apellido . "</h2>";
		echo "<h2> Email : " . $email . "</h2>";
		echo "<h2> Usuario : " . $usuario . "</h2>";
		echo "<h2> Clave : " . $clave . "</h2>";
		echo "<h2> Genero : " . $genero . "</h2>";
		echo "<h2> Celular : " . $celular . "</h2>";
	}
	?>

</body>

</html>