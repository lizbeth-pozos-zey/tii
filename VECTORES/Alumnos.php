<!DOCTYPE html>
<html>
<head>
	<title>Alumnos</title>
</head>
<body>

<form action="Alumnos.php" method="POST">
	    
	    NOMBRE:
		<input type="tex|t" name="info[nombre2]" required>
		<br>
		MATRICULA:
		<input type="text" name="info[matricula]" required>
		<br>
		EDAD:
		<input type="text" name="info[edad]" required>
		<br>
		CARRERA:
		<input type="text" name="info[carrera]" required>
		<br>
		EMAIL:
		<input type="text" name="info[email]" required>
		<br>
		TELEFONO:
		<input type="text" name="info[tel]" required>
		<br>
		TUTOR:
		<input type="text" name="info[tut]" required>
		<br>
		<input type="submit" value="enviar">
		<br>
</form>
<?php 
//Desarrollar un formulario donde se capture de entrada: Nombre del alumno, matrícula, edad, carrera, email, telefono y tutor; almacenar los valores en un array y mostrarlos si la matricula se encuentra entre 100 y 1000.
if (isset($_POST['info'])) {
	$array=$_POST['info'];
	
	$MATRICULA=$array["matricula"];
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