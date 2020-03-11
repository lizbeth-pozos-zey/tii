<!DOCTYPE html>
<html>
<head>
	<title>FORMULARIO-VECTORES-2</title>
</head>
<body>

	<form action="form-vector" method="POST">
		Fecha:
		<input type="text" value="<?php echo date("m-d-y"); ?>"  disabled>
		<input type="text" name= info[fecha] value="<?php echo date ("m-d-y");?> hidden">
		<br>
		Concepto:
		<input type="text" name="info[concepto]" required>
		<br>
		Cantidad:
		<input type="text" name="info[concepto]" required>
		<br>
		Saldo:
		<input type="text" name="info[concepto]" required>
		<input type="submit" value="enviar">
		<br>

	</form>
<<?php 
if (isset($_POST['info'])) {
	$array=$_POST['info'];
	$fecha=$array["fecha"];
	$concepto=$array["concepto"];
	$cantidad=$array["cantidad"];
	$saldo=$array["saldo"];
	echo "LOS VALORES OBTENIDOS EN EL FORMULARIO CON ARRAY SON: <br>
	fecha: " .$fecha. " <br>Concepto:" .$concepto. "<br>Cantidad:" .$cantidad."<br>Saldo:" .$saldo. "";
}
 ?>
</body>
</html>