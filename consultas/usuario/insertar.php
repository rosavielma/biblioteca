<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO usuario (cedula, nombre, apellido, tipo) VALUES ($cedula, '$nombre', '$apellido', $tipo);";
$res = mysqli_query($conexion, $sql);
if ($res) { ?>
	<script>
		alert('Datos ingresado correctamente');
		window.location='../../public/view/usuarios.php';
	</script>
<?php }
else{ ?>
	<script>
		alert('Error, no se logro guardar los datos');
		window.location='../../public/view/usuarios.php';
	</script>
<?php } ?>
