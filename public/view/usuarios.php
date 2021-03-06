<?php   
    session_start();
    if (!isset($_SESSION['s_usuario'])) { header("location: ../view/login.php"); }
    if (isset($_REQUEST["cedula"]))
    	
    {
     require_once '../../consultas/conexion.php';
     extract($_REQUEST);
     $sql = "SELECT * FROM usuario WHERE cedula = $cedula";
     $res = mysqli_query($conexion, $sql); 
     $resul= mysqli_fetch_assoc($res);    			
    }
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
        				<fieldset>
            				<legend>
            					<?= (isset($cedula) ? 'Edicion' : 'Registro') ?> de Usuario
            				</legend>
        					<form action="../../consultas/usuario/<?= (isset($cedula) ? 'modificar.php' : 'insertar.php') ?>" method="POST" >
					       	<div>
			<label            for="cedula">Cedula</label>
			<input            id="cedula" class="form-control input-sm" type="number" min="1000000" max="100000000" name="cedula" value="<?= (isset($cedula) ? $resul['cedula'] : '') ?>" placeholder="Ingrese Cedula" required>
					          </div>

					       	<div>
					                	<label for="nombre">Nombre</label>
					                	<input id="nombre" class="form-control input-sm" type="text" name="nombre" TITLE='Coloque solo letras' value="<?= (isset($cedula) ? $resul['nombre'] : '') ?>" placeholder="Ingrese Nombre" title=""
					                	 required pattern='^[A-Za-záéíóúñ\s]{1,50}$' > 
					          </div>

					       	<div>
                						<label for="apellido">Apellido</label>
                						<input id="apellido" class="form-control input-sm" type="text" name="apellido"  TITLE='Coloque solo letras' value="<?= (isset($cedula) ? $resul['apellido'] : '') ?>" placeholder="Ingrese su Apellido" 
                						required pattern='^[A-Za-záéíóúñ\s]{1,50}$' > 
            					</div>

						<div>
					      		<label for="tu">Tipo de Usuario</label>
					               	<select id="tu" class="form-control input-sm <?= (isset($cedula) ? '' : 'tu') ?> " name="tipo" required> 
					                		<option value="0">Seleccione</option>
					                		<?php 
					                			require_once ('../../consultas/conexion.php');
					$sql = "SELECT * FROM tipo_usuario";
					$res = mysqli_query($conexion, $sql);
				        while ($row = mysqli_fetch_array($res)) {?>
					                				<option value="<?= $row[0] ?> "<?= ( ((isset($cedula)) && $resul['tipo'] == $row[0]) ? 'selected' : '') ?> > <?= $row[1] ?></option>	
					                			<?php } ?>
					              	</select>
					              	<?php if(!isset($cedula)) { ?>
					              		<button id="mas" class="btn btn-default btn-sm" href="#Edificio" type="button"  data-toggle="modal">
				    					<span class="glyphicon glyphicon-plus"></span>
					              	<?php } ?>
					              	
				  			</button> 
					          </div>

					          <span class="boton">
					          	<input class="btn btn-primary btn-sm" type="reset" value="borrar">
					          </span>
					           	
					          <span class="boton">
					           <?php if(isset($cedula)) { ?>
					            <input type="hidden" name= "civ" value= "<?= $cedula ?>">  	
					            <?php } ?>
					          	<input class="btn btn-primary btn-sm" type="submit" value="<?= (isset($cedula) ? 'Editar' : 'Registrar') ?>">
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

<div id="Edificio" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            		<div class="modal-header">
                		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                		<h4 class="modal-title">Tipo de Usuario</h4>
            		</div>
            		<div class="modal-body">
            			<form action="../../consultas/tipoUsuario/insertar.php" method="POST">
            				<div>
					        	<label for="nombre">Nombre</label>
					         	<input id="nombre" class="form-control input-sm" type="text" name="nombre" value="" placeholder="Ingrese Nombre" title="'Coloque solo letras'"
					         	required pattern='^[A-Za-záéíóúñ\s]{1,50}$' autocomplete="off"> 
					</div>
					<span>
					         	<input class="btn btn-primary btn-sm" type="reset" value="borrar">
					 </span>
					           	
					<span>
					         	<input class="btn btn-primary btn-sm" type="submit" value="Registrar">
					</span>
            			</form>
            		</div>
        		</div>
    	</div>
</div>
