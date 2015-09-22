<style>
	#editorial{
		display: none;
	}
</style>
<div id="editorial" class="modal fade">
	<div id="autorModal" class="modal-dialog">
		<div class="modal-content">
	            		<div class="modal-header">
	                		<button id="x" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                		<h4 class="modal-title">Editorial</h4>
	            		</div>
            			<div  class="modal-body">
	            			<form action="../../consultas/editorial/insertar.php" method="POST">
	            				<div>
					        	<label for="nombre">Nombre</label>
					         	<input id="nombre" class="form-control input-sm" type="text" name="nombre" 
					         	       value="" placeholder="Ingrese Nombre" title=""> 
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