<?php 
include ("conexion.php");
$con=conectar();

if (isset($_REQUEST['enviar'])) {
	$nombre=$_REQUEST['nombre'];
	$matricula=$_REQUEST['matricula'];
	$correo=$_REQUEST['correo'];
	$nacimiento=$_REQUEST['nacimiento'];
 	$query="INSERT INTO alumnos VALUES('',´$nombre´,'$matricula,'$correo'$nacimiento')";
 	$dato=mysql_query($query,$con);

 	if ($dato) {
 		echo "no se ingresaron los datos";
 	}else {
 		echo "Se guardaron los datos correctamente";
 	}
 } ?>