<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>ListaAutores/modificarpost" method="post">
		<fieldset>
			<legend>
				<label for="idlistautores"> Lista de Autores</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="nombre">Nombre</label> 
				<div class="col-sm-4">
					<input class="form-control"  type="text" name="nombre" id="nombre" value="<?=$lista->nombre ?>"></input><br><br>
				</div>
			</div>
			<?php 
				$ides = [];
				foreach($lista->sharedAutorList as $k=>$v){
					$ides[]= $k;
				}
				//echo '<pre><code>' . print_r($ides) .  '</code></pre>'
			?>
			
			<div class="form-group">
				<label  class="control-label col-sm-2" for="autores[]">Autores</label>
				<div class="col-sm-10">
					<select multiple name="autores[]" id="autores[]">			 
							<?php foreach ($autores as $autor): ?>
							<option class="form-control col-sm-10"  value="<?=$autor->id ?>"
							<?= in_array($autor['id'], $ides) ? 'selected' : 'error'?>>
							<?=$autor->nombre ?></option>
			 				<?php endforeach;?>
					</select>
				</div>
			</div>			
			<input type="hidden" name="id_lista" value="<?= $lista->id?>">
			
			<input class="btn" type="submit" value="Modificar Lista">
		</fieldset>
	</form>
	
</div>
