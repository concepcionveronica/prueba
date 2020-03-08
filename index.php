<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
</head>
<body>
	<form id="f1" action="controladores/login.php" method="post">
	<h1>la prueba</h1>
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" required="true">
	<br>
	<br>
	<label for="clave">Contraseña</label>
	<input type="password" name="clave" required="true">
<br><br>		
	<button type="submit" name="Acepta">Guardar</button>
	<button type="reset" name="Cancelar">Cancelar</button> 
	</form>
</body>