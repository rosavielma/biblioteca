
<div id="categoria" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
            		<div class="modal-header">
                		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                		<h4 class="modal-title">Categoria del libro</h4>
            		</div>
            		<div class="modal-body">
            			<form action="../../consultas/categoria/insertar.php" method="POST">

            				<div>
					        	<label for="codigo">Codigo</label>
					         	<input id="codigo" class="form-control input-sm" type="number" min="0" name="id" value="" placeholder="Ingrese Codigo" title=""> 
					</div>
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