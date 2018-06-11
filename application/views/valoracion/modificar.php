<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Valoracion/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idValoracion">  modificar Valoracion</label>
			</legend>
			
			<label for="nota">nota</label>
		 	<input type="text" name="nota" id="nota" placeholder="<?= $valoracion->nota?>"></input><br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" placeholder="<?= $valoracion->contenido?>"></textarea><br><br>				
			
			<input type="hidden" name="id_valoracion" value="<?= $valoracion->id?>">
		    			
		    <input type="submit" value="modificar Valoracion">
		</fieldset>
		
	</form>
	
</div>

