<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>ListaAutores/modificarpost" method="post">
		<fieldset>
			<legend>
				<label for="idlistautores"> Lista de Autores</label>
			</legend>
			
			<label for="nombre">Nombre</label> 
			<input type="text" name="nombre" id="nombre" value="<?=$lista->nombre ?>"></input><br><br>
			
			
			<?php 
				$ides = [];
				foreach($lista->sharedAutorList as $k=>$v){
					$ides[]= $k;
				}
				//echo '<pre><code>' . print_r($ides) .  '</code></pre>'
			?>
			
			
			<label for="autores[]">Autores</label><br><br>
			<select multiple name="autores[]" id="autores[]">			 
				<?php foreach ($autores as $autor): ?>
				<option value="<?=$autor->id ?>"
				<?= in_array($autor['id'], $ides) ? 'selected' : 'error'?>>
				<?=$autor->nombre ?></option>
			 	<?php endforeach;?>
			</select>
			<br><br>
			<input type="hidden" name="id_lista" value="<?= $lista->id?>">
			
			<input type="submit" value="registrar lista de autores">
		</fieldset>
	</form>
	
</div>
