<!DOCTYPE html>
<html> 
<head> 
  	<meta charset='UTF-8'>
  	<title>Registro Usuario Sistema Bibliotecario</title> 
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
                  <caption>USUARIOS ORDENADOS POR CEDULA</caption>
                  <thead>
                    <tr>
                      <th>CEDULA</th>
                      <th>NOMBRE</th>
                      <th>APELLIDO</th>
                      <th>TIPO DE USUARIO</th>
                      <th>Eliminar</th>
                      <th>Modificar</th>
                    </tr>
                  </thead>  
                  <tbody>
                    <?php
                      require_once ('../../consultas/conexion.php');
                      $sql = "SELECT * FROM usuario order by cedula";
                      $res = mysqli_query($conexion, $sql);
                      while ($row = mysqli_fetch_array($res)){ ?>
                        <tr>
                          <td> <?= $row[0]?> </td>
                          <td> <?= $row[1]?> </td>
                          <td> <?= $row[2]?> </td>
                          <td> <?= $row[3]?> </td>
                          <td> 
                          <form action="../../consultas/usuario/eliminar.php" method="POST">
                            <input type="hidden" name="cedula" value="<?= $row[0]?>">
                            <input type="submit" value="X">
                          </form>
                          </td>
                          <td> 


                          <form action="../../public/view/usuarios.php" method="POST">
                          <input type="hidden" name="cedula" value="<?= $row[0]?>">
                          <input type="submit" value=":)">

                          </form>
                          </td>


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
