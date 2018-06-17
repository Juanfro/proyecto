<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Comentario/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idContenido">  Modificar Contenido</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="contenido">Contenido</label> 
				<div class="col-sm-10">
					<textarea class="form-control col-sm-10 " rows="5" cols="10" name="contenido" id="contenido" placeholder="<?= $comentario->contenido?>"></textarea><br><br>				
				</div>
			</div>	
			<input type="hidden" name="id_comentario" value="<?= $comentario->id?>">
		    			
		    <input class="btn" type="submit" value="modificar Comentario">
		</fieldset>
		
	</form>
	
</div>

