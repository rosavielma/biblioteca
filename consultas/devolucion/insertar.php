<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO devolucion (id, fechaEntrega, prestamo) VALUES
      (NULL,  '$fechaEntrega', '$prestamo' )";
$res = mysqli_query($conexion, $sql);

echo ($sql); ?>