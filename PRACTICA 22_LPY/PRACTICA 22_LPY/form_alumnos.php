<!DOCTYPE html>
<html>
<head>
	<title>form_alumnos</title>
</head>
<body>
<!--Lizbeth Pozos Yáñez_TI-->

<center><h1>INGRESE LOS DATOS REQUERIDOS</h1></center>

<!-- Se creo el formulario alumnos-->
<form action="confi_alumnos.php" method="POST">
<center><br><b>Nombre: </b><input type="text" name="nombre"></br>
<br><b>Matrícula: </b> <input type="text" name="matricula"></br>
<br><b>Correo: </b> <input type="text" name="correo"></br>
<br><b>Fecha de nacimiento: </b> <input type="text" name="nacimiento"></br>
<br><input type="submit" value="Enviar" ></center>
</form>
</body>
</html>
<!-- Se creo el vinculo para  regresar al apartado de profesores-->
 "<a href="index.php">Regresar</a>"

<!--En php, se guardaran los datos en el array para almacenarlos en la base de datos...-->
