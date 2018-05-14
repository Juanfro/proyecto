<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Valoracion/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idValoracion"> Valoracion</label>
			</legend>
			
			<label for="nota">nota</label>
		 	<input type="text" name="nota" id="nota" required="required"></input><br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" required="required"></textarea><br><br>				
			
			<input type="submit" value="valoracion">
		</fieldset>
		
	</form>
	
</div>
