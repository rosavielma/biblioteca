<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO autor (id, nombre, editorial) VALUES (NULL, '$nombre', '$editorial')";
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
