<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>

<<?php 
//imprimir 10 nombres y carreras, si la carrera es igual a tecnologias me va a mostrar, si la carrrera  es tecnologia, me dice que no es igual a tecnologias., solo la carrera 3 es de meca mostrarr que no es la carrera de tecnologias.

//inicilizacion del  Array


//Tarea: almacena en un array 10 primeros numeros pares imprime cada uno deellos en una linea e imprimelos todos.



//realiza un programa que muestre las peliculas que se han visto, crear un array que contengo los meses de enero, marzo y abril, asignando los valores 0, 12, 17 respectivamente,. si en alguno  de los meses no se a visto ninguna pelicula no ha de mostrar la iformacion de ese mes     

$arrayNombres = array( "Abril", "Paola", "Lizbeth", "Andrea", "Julian", "Jesus", "Eduardo", "Marco", "Martin");
print_r($arrayNombres);


$arrayCarrera = array( "Meca", "ITI", "Nanu", "ITI", "Derecho", "Conta", "Electricidad", "ingenieria", "Artes", "Odonto");
print_r($arrayCarreras);


if ($Carreras [3]=="ITI") 
{

echo $Carreras [3];

}

else{

	echo "POSICION 3 DE ARRAY NO ES ITI";
	echo "</br>";
}
 ?>
</body>
</html>