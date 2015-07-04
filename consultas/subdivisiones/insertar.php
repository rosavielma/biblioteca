<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO subdivisiones (id, nombre, diviciones) VALUES ('$id', '$nombre', '$diviciones')";
$res = mysqli_query($conexion, $sql);
if ($res) { ?>
	<script>
		alert('=)');
		window.location='../../public/view/texto.php';
	</script>
<?php }
else{ ?>
	<script>
		alert('=(');
		window.location='../../public/view/texto.php';
	</script>
<?php } ?>
