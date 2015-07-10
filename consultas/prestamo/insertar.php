<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO prestamo (id, fecha_prestamo, fechaLimite, cota, usuario) VALUES
      (NULL, '$fecha_prestamo', '$fechaLimite', '$cota', '$usuario' )";
$res = mysqli_query($conexion, $sql);

echo($sql);?>
