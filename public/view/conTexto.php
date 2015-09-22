<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: ../view/login.php"); }
    if (isset($_REQUEST["cota"]))
      
    {
     require_once '../../consultas/conexion.php';
     extract($_REQUEST);
     $sql = "SELECT * FROM texto WHERE cota = $cota";
     $res = mysqli_query($conexion, $sql); 
     $resul= mysqli_fetch_assoc($res);          
    }
?>

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
                      <th>Modificar</th>
                     
                      </th>
                    </thead>  
                  <tbody>
                    <?php
                      require_once ('../../consultas/conexion.php');
                      $sql = "SELECT a.*, b.nombre, d.nombre AS categoria FROM texto a INNER JOIN autor b ON a.autor = b.id INNER JOIN divisiones c ON a.categoria = c.id INNER JOIN categoria d ON c.categoria = d.id order by cota";
                      $res = mysqli_query($conexion, $sql);
                      while ($row = mysqli_fetch_array($res)){ 

                        ?>
                        <tr>
                          <td> <?= $row[cota]?> </td>
                          <td> <?= $row[titulo]?> </td>
                          <td> <?= $row[nombre]?> </td>
                          <td> <?= $row[categoria]?> </td>

                          <td> 


                          <form action="../../public/view/texto.php" method="POST">
                          <input type="hidden" name="cota" value="<?= $row[0]?>">
                          <input type="submit" value="Modificar" onClick="return confirm('¿Seguro que Desea Modificar el Libro?')">
  
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
