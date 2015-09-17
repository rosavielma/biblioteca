<?php 
	require_once '../conexion.php'; 
	extract($_POST);
	$sql = "UPDATE usuario SET cedula='".$cedula."',nombre='".$nombre."',apellido='".$apellido."',tipo='".$tipo."'WHERE cedula='".$civ."'";
	$res = mysqli_query($conexion, $sql);
?>
<?php if ($res){ ?>
<script>
	alert("Datos Modificados");
	window.location='../../public/view/conUsuarios.php';
</script>

<?php }
else 
	{ ?>	


<script>
	alert("Datos No Modificados");
	window.location='../../public/view/usuarios.php?cedula=<?= $civ ?> ';
</script>

<?php } ?>