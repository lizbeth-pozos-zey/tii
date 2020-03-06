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

	    NOMBRE:
		<input type="tex|t" name="info[nombre2]" required>
		<br>
		CALIFICACIÓN:
		<input type="text" name="info[calificacion]" required>
		<br>
		
		<input type="submit" value="enviar">
		<br>
</form>

<?php

if (isset($_POST['info'])) {
	$array=$_POST['info'];
	
	
	$EDAD=$array["edad"];
	$CARRERA=$array["carrera"];
	$EMAIL=$array["email"];
	$TELEFONO=$array["tel"];
	$TUTOR=$array["tut"];
	
}

if ($MATRICULA>100 AND $MATRICULA<1000) {

    echo "LOS DATOS INGRESADOS EN EL  ARRAY SON: <br>
	 <br>Matricula:" .$MATRICULA. "<br>Edad:" .$EDAD."<br>Carrera:" .$CARRERA. "<br>Email:" .$EMAIL."<br>Telefono:" .$TELEFONO. "<br>Tutor:" .$TUTOR."";
}


?>
</body>
</html>