<?php 
require_once '../conexion.php';
extract($_POST);
$sql = "INSERT INTO texto (cota, titulo, ano, numEdicion, autor, categoria, grado)
        VALUES ('$cota', '$titulo', '$ano', '$numEdicion', '$autor', '$tipo', '$grado')";
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
