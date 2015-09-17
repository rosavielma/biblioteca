<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO tipo_usuario (id, nombre) VALUES (NULL, '$nombre')";
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
