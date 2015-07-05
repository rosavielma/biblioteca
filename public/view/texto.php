<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: login.php"); }
?>

<!DOCTYPE html>
<html> 
<head> 
	<meta charset='UTF-8'>
	<title>Prueba de Bootstrap</title> 
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/form.css">

	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/nuevo.js"></script>
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
        				<fieldset>
            				<legend>Registro de Libros</legend>
        					<form action="../../consultas/texto/insertar.php" method="POST" >
                   					<div>
              					 	<label for="cota">Cota</label>
               						<input id="cota" class="form-control input-sm" type="text"  name="cota" value="" placeholder="Ingrese la Cota" required>
         						</div>
            
            					<div class="titulo">
             						<label for="titulo">Titulo</label>
               						<input id="titulo" class="form-control input-sm" type="text" name="titulo" value="" placeholder="Ingrese el Titulo"> 
            					</div>

              					<div class="año">
             						<label for="año">Año</label>
               						<input id="año" class="form-control input-sm" type="year" name="ano" value="" placeholder="Ej:2015"> 
            					</div>          					

              					<div class="edicion">
             						<label for="edicion">edicion</label>
               						<input id="edicion" class="form-control input-sm" type="number" min="0" name="numEdicion" value=""> 
            					</div> 

         						<div>
                						<label for="autor">Autor</label>
                						<input id="autor" class="form-control input-sm tu" type="text" name="autor" value="" placeholder="Ingrese el Autor"> 
                						<button id="mas" class="btn btn-default btn-sm" href="#Autor" type="button"  data-toggle="modal">
				    				<span class="glyphicon glyphicon-plus"></span>
				  			</button>
           					</div>            					

						<div>
					      		<label for="c">Categoria</label>
					               	<select id="c" class="form-control input-sm tu" name="tipo" required> 
					                		<option value="0">Seleccione</option>
					                		<?php 
					                			require_once ('../../consultas/conexion.php');
					                			$sql = "SELECT * FROM categoria";
					                			$res = mysqli_query($conexion, $sql);
					                			while ($row = mysqli_fetch_array($res)) {?>
					                				<option value="<?= $row[0] ?>"><?= $row[1] ?></option>	
					                			<?php } ?>
					              	</select>
					              	<button id="mas" class="btn btn-default btn-sm" href="#categoria" type="button"  data-toggle="modal">
				    				<span class="glyphicon glyphicon-plus"></span>
				  			</button> 
					          </div>

					          <div>
					      		<label for="d">Divisiones</label>
					               	<select id="d" class="form-control input-sm tu" name="tipo" required> 
					                		<option value="0">Seleccione</option>
					                		<?php 
					                			require_once ('../../consultas/conexion.php');
					                			$sql = "SELECT * FROM divisiones";
					                			$res = mysqli_query($conexion, $sql);
					                			while ($row = mysqli_fetch_array($res)) {?>
					                				<option value="<?= $row[0] ?>"><?= $row[1] ?></option>	
					                			<?php } ?>
					              	</select>
					              	<button id="mas" class="btn btn-default btn-sm" href="#diviciones" type="button"  data-toggle="modal">
				    				<span class="glyphicon glyphicon-plus"></span>
				  			</button> 
					          </div>

					          <div>
					      		<label for="sub">Subdivisiones</label>
					               	<select id="sub" class="form-control input-sm tu" name="tipo" required> 
					                		<option value="0">Seleccione</option>
					                		<?php 
					                			require_once ('../../consultas/conexion.php');
					                			$sql = "SELECT * FROM subdivisiones";
					                			$res = mysqli_query($conexion, $sql);
					                			while ($row = mysqli_fetch_array($res)) {?>
					                				<option value="<?= $row[0] ?>"><?= $row[1] ?></option>	
					                			<?php } ?>
					              	</select>
					              	<button id="mas" class="btn btn-default btn-sm" href="#subdivisiones" type="button"  data-toggle="modal">
				    				<span class="glyphicon glyphicon-plus"></span>
				  			</button> 
					          </div>

                					<div>
					      		<label for="gl">Grado del Libro</label>
					               	<select id="gl" class="form-control input-sm tu" name="grado" required> 
					                		<option value="0">Seleccione</option>
					                		<?php 
					                			require_once ('../../consultas/conexion.php');
					                			$sql = "SELECT * FROM grado ORDER BY nombre ASC";
					                			$res = mysqli_query($conexion, $sql);
					                			while ($row = mysqli_fetch_array($res)) {?>
					                				<option value="<?= $row[0] ?>"><?= $row[1] ?></option>	
					                			<?php } ?>
					              	</select>
					              	<button id="mas" class="btn btn-default btn-sm" href="#grado" type="button"  data-toggle="modal">
				    				<span class="glyphicon glyphicon-plus"></span>
				  			</button> 
					          </div>

					          <span class="boton">
					          	<input class="btn btn-primary btn-sm" type="reset" value="borrar">
					          </span>
					           	
					          <span class="boton">
					          	<input class="btn btn-primary btn-sm" type="submit" value="Registrar">
					          </span>
        					</form>
        				</fieldset>
        			</article>
      		</section>
      		<footer>
      			<?php require_once '../include/footer.php'; ?>
      		</footer>
      	</div>
</body>
</html>
<?php 
	require_once'modal/autor.php'; 
	require_once'modal/categoria.php'; 
	require_once'modal/diviciones.php'; 
	require_once'modal/subdivisiones.php'; 
	require_once'modal/grado.php'; 
?>