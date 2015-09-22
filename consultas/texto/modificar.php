<?php 
	require_once '../conexion.php'; 
	extract($_POST);
	$sql = "UPDATE texto SET cota='$cota',titulo='$titulo', ano = '$ano', numEdicion='$numEdicion', autor='$autor',categoria='$tipo', grado='$grado' WHERE cota='$cotv'";
	$res = mysqli_query($conexion, $sql);
?>
<?php if ($res){ ?>
<script>
	alert("Datos Modificados");
	window.location='../../public/view/conTexto.php';
</script>

<?php }
else 
	{ ?>	


<script>
	alert("Datos No Modificados");
	window.location='../../public/view/texto.php?cota=<?= $cotv ?> ';
</script>

<?php } ?>