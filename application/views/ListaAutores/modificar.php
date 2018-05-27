<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>ListaAutores/modificarpost" method="post">
		<fieldset>
			<legend>
				<label for="idlistautores"> Lista de Autores</label>
			</legend>
			
			<label for="nombre">Nombre</label> 
			<input type="text" name="nombre" id="nombre" value="<?=$lista->nombre ?>"></input><br><br>
			
			<label for="autores[]">Autores</label><br><br>
			<select multiple name="autores[]" id="autores[]">			 
				<?php foreach ($autores as $autor): ?>
				<option value="<?=$autor->id ?>"><?=$autor->nombre ?></option>
			 	<?php endforeach;?>
			</select>
			<br><br>
			<input type="hidden" name="id_lista" value="<?= $lista->id?>">
			
			<input type="submit" value="registrar lista de autores">
		
	</form>
	
</div>
