<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Valoracion/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idValoracion"> Valoracion</label>
			</legend>
			
			<input type="hidden" name="id_libro" value="<?= $id_libro?>"></input>
			
			<label for="nota">nota</label>
			
			<select name="nota">
				<option value="1" label="1">			
				<option value="2" label="2">			
				<option value="3" label="3">			
				<option value="4" label="4">			
				<option value="5" label="5">			
				<option value="6" label="6">			
				<option value="7" label="7">			
				<option value="8" label="8">			
				<option value="9" label="9">			
				<option value="10" label="10">							
			</select>			
		 	<br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" ></textarea><br><br>				
			
			<input type="submit" value="valoracion">
		</fieldset>
		
	</form>
	
</div>
