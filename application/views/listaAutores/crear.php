<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>ListaAutores/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idlistautores"> Lista de Autores</label>
			</legend>
			
				<label for="nombre">Nombre</label> 
				<input type="text" name="nombre" id="nombre"></input><br><br>
			

				<label for="autores[]">Autores</label><br><br>
					<select multiple name="autores[]" id="autores[]">			 
						<?php foreach ($autores as $autor): ?>
							<option value="<?=$autor->id ?>"><?=$autor->nombre ?></option>
			 			<?php endforeach;?>
				    </select><br><br>
			
				<label>Descripción</label>
					<textarea name="descripcion" id="descripcion" rows="4" cols="4" ></textarea>
			
				<input type="submit" value="registrar lista de autores">
			
		</fieldset>
		

	</form>
	
</div>
