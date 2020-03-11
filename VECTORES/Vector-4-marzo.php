<!DOCTYPE html>
<html>
<head>
	<title>Vectores</title>
</head>
<body>
<<?php 
//devielve al array los que no swe encuentran 
 $animales = array(
 	"gato" => "sunny" , 
 	"perro" => "stoichkov",
 	"chinpancé" => "Muggles",
 	"chinchilla" => "Herminia",
 	"charles", 
 	"oso" => "traxa");

$animales2 = array(
 	"perro" => "stoichkov" , 
 	"gato" => "sunny",
 	"conejo" => "Mues",
 	"chin");
 $diferencia = array_diff($animales, $animales2);
 var_dump($diferencia);
 ?>





</body>
</html>