<!DOCTYPE html>
<html>
<head>
	<title>ARRRAY TAREA</title>
</head>
<body>
<?php


//realiza un programa que muestre las peliculas que se han visto, crear un array que contengo los meses de enero, marzo y abril, asignando los valores 0, 12, 17 respectivamente,. si en alguno  de los meses no se a visto ninguna pelicula no ha de mostrar la iformacion de ese mes  


$meses = array(0 => 'Enero', 12 => 'Marzo', 17 => 'Abril');
print_r($meses);


$peliculas = array( "El dia", "Mañana no te olvides", "", "El hombre que conocia el infinito", "Un don excepcional", "Good Will Hunting", "El código enigma", "Pi");
print_r($peliculas);
echo "</br>";

if ($peliculas [0] == "El dia") 
{
echo "SI SE ENCUENTRA LA PELICULA";

echo "</br>";
echo $peliculas [3];

}

else{

	echo "POSICION 0 DE ARRAY NO ESTA LA PELICULA";
	echo "</br>";
}





?>
</body>
</html>