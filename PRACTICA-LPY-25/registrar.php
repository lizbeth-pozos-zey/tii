<?php 
include ("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name'] >= 1 && strlen($_POST['email'] >= 1))) {
        $name =  trim ($_POST['name']);
        $email = trim ($_POST['email']);
        $fechareg = date("d/m/y");
//Se hace la consulta a la base de datos
	     $consulta = "INSERT INTO datos (nombre, email, fecha_reg) VALUES ( '$name','$email','$fechareg')";
	//se realizo la consulta
	     $resultado = mysqli_query($conex, $consulta);

	if ($resultado){
		?>
		<h3 class="ok">¡Inscripción correcta!</h3>
	<?php
    } else {
		  ?>
		  <h3 class="bad"> ¡Error!</h3>
		  <?php
}

}else {
		  ?>
		  <h3 class="bad"> ¡Llene los campos, por favor!</h3>

	<?php  
}

}
 ?>