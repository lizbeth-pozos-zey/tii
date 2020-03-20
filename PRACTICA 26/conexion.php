conexion.php

<?php 
$conexion = new mysqli('localhost', 'root', '', 'bd_lizbeth');

mysqli_query( $conexion, 'SET NAMES utf8');

//Si hay algún error al conectar se muestra con el If
if (mysqli_connect_errno()) {
	printf("No se conecto  a la base de datos:%s\n", mysqli_connect_error());
	exit();
}

 ?>