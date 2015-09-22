<?php 
	require_once '../conexion.php'; 
	extract($_POST);
	$sql = "UPDATE texto SET cota='$cota',titulo='$titulo', ano = '$ano', numEdicion='$numEdicion', autor='$autor',categoria='$tipo', grado='$grado' WHERE cota='$cotv'";
	echo $sql;