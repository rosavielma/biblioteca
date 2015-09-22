<!DOCTYPE html>
<html> 
<head> 
  	<meta charset='UTF-8'>
  	<title>Consulta de Texto Sistema Bibliotecario</title> 
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/consultas.css">

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
        				<table>
                  <caption>PRESTAMOS ORDENADOS POR FECHA</caption>
                  <thead>
                    <tr>
                      <th>CEDULA</th>
                      <th>CODIGO MATERIAL</th>
                      <th>FECHA PRESTAMO</th>
                      <th>FECHA DEVOLUCIÓN</th>
                      
                    </tr>
                  </thead>  
                  <tbody>

                  
                    <?php
                      require_once ('../../consultas/conexion.php');
                      $sql = "SELECT * FROM prestamo order by fecha_prestamo";
                      $res = mysqli_query($conexion, $sql);
                      while ($row = mysqli_fetch_array($res)){ ?>
                        <tr>
                          <td> <?= $row[cedula]?> </td>
                          <td> <?= $row[cota]?> </td>
                          <td> <?= $row[fecha_prestamo]?> </td>
                          <td> <?= $row[fechaLimite]?> </td>
                         
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>
        			</article>
      		</section>
      		<footer>
      			<?php require_once '../include/footer.php'; ?>
      		</footer>
      	</div>
</body>
</html>