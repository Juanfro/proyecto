<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>ListaLibros/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idlistalibros"> Lista de libros</label>
			</legend>
			
			<label for="nombre">Nombre</label> 
			<input type="text" name="nombre" id="nombre"></input><br><br>
				
				<label for="libros">Libros</label><br><br>
				<select multiple="multiple" name="libros[]" id="libros">								
					<?php foreach ($libros as $libro): ?>
						<option value="<?=$libro->id ?>"><?=$libro->titulo ?></option>
				 	<?php endforeach;?>
				</select>
				<br><br>
				<label>Descripción</label>
					<textarea name="descripcion" id="descripcion" rows="4" cols="12" ></textarea>
			    <br>
			<input type="submit" value="registrar lista de libros">
		</fieldset>
	</form>
	
</div>