<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Comentario/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idContenido">  Modificar Contenido</label>
			</legend>
			
			
			
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" placeholder="<?= $comentario->contenido?>"></textarea><br><br>				
			
			<input type="hidden" name="id_comentario" value="<?= $comentario->id?>">
		    			
		    <input type="submit" value="modificar Comentario">
		</fieldset>
		
	</form>
	
</div>

