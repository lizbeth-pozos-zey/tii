<!DOCTYPE html>
<html>
<head>
	<title>dimensiones</title>
</head>
<body>
<<?php 
$carros = array(
 array("vulvo", 22,18),
 array("BMW", 123,58),
 array("Chev", 5,2),
 array("Ford", 12,50),
);
//renglon [0], columna [1] 
echo $carros [0][0]. ":En stock:" .$carros[0][1].",vendidos:" .$carros[0][2]."<br>";

echo $carros [1][0]. ":En stock:" .$carros[1][1].",vendidos:" .$carros[1][2]."<br>";

echo $carros [2][0]. ":En stock:" .$carros[2][1].",vendidos:" .$carros[2][2]."<br>";

echo $carros [3][0]. ":En stock:" .$carros[3][1].",vendidos:" .$carros[3][2]."<br>";
 ?>
<<?php 
//imprimir matriz utilizando FOR

$alumnos = array(
 array("lizbeth", 20,5),
 array("pozos", 19,10),
 array("Yáñez", 21,9),
 array("Palmero", 23,5),
);


//imprimir en lista ordenada ul, b negrita
for ($row=0; $row <4 ; $row++) { 

	echo "<p><b> N°Renglon $row </b></p>";
	echo "<ul>";
//lista ordenada li
	for ($col=0; $col <3 ; $col++) { 
		echo "<li>".$alumnos[$row][$col]."</li>";
	}

	echo "</ul>";

}
//tarea agregar, concatenar con un mensaje, El nombre es; La edad, El número de la suerte es: , modificar el echo, para mostrar los datos 


 ?>


</body>
</html>