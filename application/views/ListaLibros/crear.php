<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>ListarLibros/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idlistalibros"> Lista de libros</label>
			</legend>
			<label for="nombre">Nombre</label> <input type="text" name="nombre"
				id="nombre"></input><br><br>
				
				<label>Libros</label><br><br>
				<select multiple name="libros[]" id="libros[]">
				 <tr><th>nombre</th></tr>
				<?php foreach ($libros as $libro): ?>
				<option value="<?=$libro->id ?>"><?=$libro->titulo ?></option>
			 	<?php endforeach;?>
				</select>
				<br><br>
			
			<input type="submit" value="registrar lista de libro">
		</fieldset>
	</form>
	
</div>