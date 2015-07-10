<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO prestamo (prestamo, fecha_prestamo, fechaLimite, cota, usuario) VALUES
      (NULL, '$fecha_prestamo', '$fechaLimite', '$cota', '$usuario' )";
$res = mysqli_query($conexion, $sql);

if ($res) { ?>
	<script>
		alert('Datos ingresado correctamente');
		window.location='../../public/view/texto.php';
	</script>
<?php }
else{ ?>
	<script>
		alert('Error, no se logro guardar los datos');
		window.location='../../public/view/texto.php';
	</script>
<?php } ?>

