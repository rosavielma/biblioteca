<?php 
	require_once '../conexion.php'; 
	extract($_POST);
	$a = date("Y-m-d");
	$sql = "UPDATE prestamo SET prestado = null, fecha_devolucion = '$a', devuelto = 'si' WHERE id = '$id'";
	$res = mysqli_query($conexion, $sql);
?>

<?php if ($res){ ?>
<script>
	alert("Libro entregado");
	window.location='../../public/view/devo.php?cedula=<?= $cedula ?>';
</script>

<?php }
else 
	{ ?>	


<script>
	alert("Libro No Entregado");
	window.location='../../public/view/devo.php?cedula=<?= $civ ?> ';
</script>

<?php } ?>