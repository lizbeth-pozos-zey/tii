<!DOCTYPE html>
<html>
<head>
	<title>05-MARZO-2020</title>
</head>
<body>
<?php  
//1. Realizar un programa que permita ingresar las calificaciones de 2 materias de 10 estudiantes, imprimir la matriz. El funcionamiento será: En un formulario se captura el nombre y las calificaciones de las 2 materias, al llegar al alumno número 10 al terminar de capturar sus 2 calificaciones y presionar guardar, en ese momento se deberá imprimir la matriz con los 10 alumnos y las 2 calificaciones de cada uno. MATRIZ 2*9
?>
<form action="caliicaciones-materias.php" method="POST">

	    ALUMNO:
		<input type="tex|t" name="info[nombre]" required>
		<br>
		CALIFICACIÓN:
		<input type="text" name="info[calificacion1]" required>
		<br>

		CALIFICACIÓN 2:
		<input type="text" name="info[calificacion2]" required>
		<br>
		<input type="submit" value="enviar">
		<br>
</form>

<?php

if (isset($_POST['info'])) {
	$array=$_POST['info'];
	
	
	$alumno = $array["nombre2"];
	$calificacion = $array["calificacion"];
	$calificacion2 = $array["calificacion2"];
	//$promedio = $calificacion+$calificacion2/2, ["promedio"];

	
}

for ($array=0; $array <9 ; $array++) {

	$promedio = ($calificacion+$calificacion2)/2;


	echo "LOS DATOS INGRESADOS EN EL  ARRAY SON: <br>
	<br>Nombre:" .$alumno. "<br>CALIFICACIÓN:" .$calificacion."<br>","<br>PROMEDIO:" .$promedio."<br>";
	
}

//if ($alumno>1 and $alumno<9 i++) {

	//$promedio = $calificacion+$calificacion2/2, ["promedio"];


	//cho "LOS DATOS INGRESADOS EN EL  ARRAY SON: <br>
	// <br>Nombre:" .$alumno. "<br>CALIFICACIÓN:" .$calificacion."<br>";
	
//}

?>
</body>
</html>