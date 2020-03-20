<?php 
    require 'conexion.php';
    $categoria = $_POST['categoria'];
    $activo = $_POST['activo'];
    $query = mysqli_query($conexion, "INSERT INTO categorias (categoria, activo) VALUES ('$categoria', $activo)");
    header('location: vista_categoria.php');
 ?>


