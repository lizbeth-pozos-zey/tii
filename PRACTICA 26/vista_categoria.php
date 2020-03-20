<!DOCTYPE html>
<html>
<head>
	<title>categoria vista</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Jerarquía o Categoría</h1>
<a href="form_nueva_categoria.html"> Categoria nueva</a><br>

<table border="1" width="79%" align="center">
	<tr>
		<th>Opción</th>
		<th>Nombre de categoria</th>
		<th>Estado</th>
	</tr>

<?php 
require 'conexion.php';
//Se hace la consulta
$consulta = mysqli_query($conexion, 'SELECT * FROM categorias');
while ($fila = mysqli_fetch_array($consulta)) {
	$id_categoria = $fila['id_categoria'];

	if ($fila['activo'==1]) {
		$texto='Activo';
	}
	else {
		$texto='No activo';
	}
	echo '<tr>';
	echo '<td><a href = "form_editar_categoria.php?id_categoria = '.$id_categoria.'"> Editar </a>&nbsp;<a href = ""> Eliminar</a></td>';
	
	echo '<td>'.$fila['categoria'].'</td>';
	echo '<td>'.$fila['activo'].'</td>';
	echo '</tr>';
}
 ?>



</table>
</body>
</html>
