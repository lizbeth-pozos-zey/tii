<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<!--Se creo el formulario con estilos del archivo "estilo.css"-->	
<form method="post">
	<h1>¡UNETE!</h1>
	<input type="text" name="name" placeholder="Nombre completo">
	<input type="email" name="email" placeholder="Email">
	<input type="submit" name="register">
</form>

<?php 
include("registrar.php");
 ?>


</body>
</html>