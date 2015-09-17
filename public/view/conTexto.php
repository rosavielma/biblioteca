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
                  <caption>TEXTOS ORDENADOS POR COTA</caption>
                  <thead>
                    <tr>
                      <th>COTA</th>
                      <th>TITULO</th>
                      <th>AUTOR </th>
                      <th>CATEGORIA </th>
                      <th>Eliminar</th>
                      <th>Modificar</th>
                    </thead>  
                  <tbody>
                    <?php
                      require_once ('../../consultas/conexion.php');
                      $sql = "SELECT * FROM texto order by cota";
                      $res = mysqli_query($conexion, $sql);
                      while ($row = mysqli_fetch_array($res)){ ?>
                        <tr>
                          <td> <?= $row[0]?> </td>
                          <td> <?= $row[1]?> </td>
                          <td> <?= $row[4]?> </td>
                          <td> <?= $row[5]?> </td>
                          <td> <button>X</button></td>
                          <td> <button>M</button></td>
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