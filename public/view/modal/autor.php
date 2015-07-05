<style>
	#editorial{
		display: none;
	}
</style>
<div id="Autor" class="modal fade">
	<div id="autorModal" class="modal-dialog">
		<div class="modal-content">
	            		<div class="modal-header">
	                		<button id="x" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                		<h4 class="modal-title">Autor</h4>
	            		</div>
            			<div  class="modal-body">
	            			<form action="../../consultas/autor/insertar.php" method="POST">
	            				<div>
					        	<label for="nombre">Nombre</label>
					         	<input id="nombre" class="form-control input-sm" type="text" name="nombre" value="" placeholder="Ingrese Nombre" title=""> 
					</div>
	            				<div>
					 	<label for="ca">Editorial</label>
					          	<select id="ca" class="form-control input-sm yo" name="editorial" required> 
						          	<option value="0">Seleccione</option>
						   	<?php 
						                	require_once ('../../consultas/conexion.php');
						                	$sql = "SELECT * FROM editorial";
						                	$res = mysqli_query($conexion, $sql);
						                	while ($row = mysqli_fetch_array($res)) {?>
						                		<option value="<?= $row[0] ?>"><?= $row[1] ?></option>	
						            		<?php } ?>
						</select>
						<button id="si" class="btn btn-default btn-sm" type="button">
					    		<span class="glyphicon glyphicon-plus"></span>
					  	</button> 
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


    	<div id="editorial" class="modal-dialog">
		<div class="modal-content">
            			<div class="modal-header">
                			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                			<h4 class="modal-title">Editorial</h4>
            			</div>
            			<div  class="modal-body">
            				<form action="../../consultas/autor/insertar.php" method="POST">
	            				<div>
					        	<label for="nombre">Nombre</label>
					         	<input id="nombre" class="form-control input-sm" type="text" name="nombre" value="" placeholder="Ingrese Nombre" title=""> 
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