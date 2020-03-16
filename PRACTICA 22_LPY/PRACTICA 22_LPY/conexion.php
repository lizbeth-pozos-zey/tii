<?php 
//Se hace la conexion a la base de datos
funcion connection(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="datosejemplo";
    $connect=mysql_connect($server, $user, $pass);
}
 ?>
