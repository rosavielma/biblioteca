<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: ../view/login.php"); }
    require_once '../../consultas/conexion.php';
    extract($_REQUEST);
?>

<!DOCTYPE html>
<html> 
<head> 
    <meta charset='UTF-8'>
    <title>Registro Usuario Sistema Bibliotecario</title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">   

  <script src="../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

</head>  
<body>
  <div class="container-fluid">
          <header>
              <?php require_once ('../include/header.php');?>
          </header>
          <nav>
              <?php require_once ('../include/nav.php');?>
          </nav>
     <section>
     	<article>
     	<?php 
     		$sql = "SELECT a.*, b.nombre AS tipo FROM usuario a INNER JOIN tipo_usuario b ON a.tipo = b.id WHERE cedula = $cedula"; 
     		$res = mysqli_query($conexion, $sql);
     		$row = mysqli_fetch_assoc($res)
     	?>
     	<div> <strong>Cedula:</strong>	<?= $row['cedula'] ?></div>
     	<div> <strong>Nombre:</strong> <?= $row['nombre'] ?></div>
     	<div> <strong>Apellido:</strong> <?= $row['apellido'] ?></div>
     	<div> <strong>Tipo:</strong> <?= $row['tipo'] ?></div>
     	</article>
        <article>
        <?php 
    		$sql = "SELECT a.*, b.titulo FROM prestamo a INNER JOIN texto b ON a.cota = b.cota WHERE usuario = $cedula order by prestado DESC";
    		$res = mysqli_query($conexion, $sql);
         ?>
        <table border="2">
        	<caption>Devolucion</caption>
					<thead>
					<tr>
							<th>Cota</th>
							<th>Nombre</th>
							<th>Fecha prestamo</th>
							<th>Fecha Limite</th>
							<th>entregar libro</th>
							<th>Fecha Devolucion</th>
						</tr>
					</thead>
					<tbody>
					<?php while ($row = mysqli_fetch_assoc($res)) { ?>
						<tr>
							<td><?= $row['cota'] ?></td>
							<td><?= $row['titulo'] ?></td>
							<td><?= $row['fecha_prestamo'] ?></td>
							<td><?= $row['fechaLimite'] ?></td>
							<td>
								<?php if ($row['prestado'] != NULL){ ?>
									<form action="../../consultas/prestamo/modificar.php" method="POST">
										<input type="hidden" name="id" value="<?= $row['id'] ?>" >
										<input type="hidden" name="cedula" value="<?= $row['usuario'] ?>" >
										<input type="submit" value="Entregar" onClick="return confirm('¿Desea entregar el libro?')">
									</form>
								<?php } else { echo "Entregado"; } ?>
							</td>
							<td>
							<?php 
							if ($row['fecha_devolucion'] != NULL)
							{
								$date = date_create($row['fecha_devolucion']); 
								$date = date_format($date , 'd-m-Y');
								echo $date;  
							}
							else
							{
								echo "00-00-0000";
							}
							?>
								
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table> 
				<a class="btn btn-primary" href="devolucion.php">Anterior</a>
        </article>
      </section>
          <footer>
            <?php require_once '../include/footer.php'; ?>
          </footer>
        </div>
</body>
</html>