<?php 
	require_once("../conexion.php");
	extract($_POST);
	$sql="DELETE FROM usuario WHERE cedula = $cedula";
	$res = mysqli_query($conexion, $sql);
if ($res) { ?>
	<script>
	alert("Datos Eliminados Correctamente");
	window.location='../../public/view/conUsuarios.php';
</script>
<?php }
else { ?>	
<script>
	alert("Error, no se lograron eliminar los datos");
	window.location='../../public/view/conUsuarios.php';
</script>
<?php } ?>