<?php 
	require_once("../conexion.php");
	extract($_POST);
	$sql = "DELETE FROM texto WHERE cota = $cota";
	$res = mysqli_query($conexion, $sql);
if ($res) { ?>
	<script>
	alert("Datos Eliminados Correctamente");
	window.location='../../public/view/conTexto.php';
</script>
<?php }
else { ?>	
<script>
	alert("Error, no se lograron eliminar los datos");
	window.location='../../public/view/conTexto.php';
</script>
<?php } ?>