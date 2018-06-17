<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>ListaLibros/modificarpost" method="post">
		<fieldset>
			<legend>
				<label for="idlistalibros"> Lista de libros</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="nombre">Nombre</label> 
				<div class="col-sm-4">
					<input type="text" name="nombre" id="nombre" value='<?=$lista->nombre?>'></input>
				</div>
			</div>	
				<?php 
				$ides = [];
				foreach($lista->sharedLibroList as $k=>$v){
					$ides[]= $k;
				}
				//echo '<pre><code>' . print_r($ides) .  '</code></pre>'
			?>
			
			<div class="form-group">
				<label  class="control-label col-sm-2" for="libros">Libros</label>
				<div class="col-sm-10">
					<select multiple name="libros[]" id="libros[]">								
						<?php foreach ($libros as $libro): ?>
						<option class="form-control col-sm-10"  value="<?=$libro->id ?>"
						<?= in_array($libro['id'], $ides) ? 'selected' : 'error'?>>
						<?=$libro->titulo ?></option>
			 			<?php endforeach;?>
					</select>
				</div>
			</div>	
				<input type="hidden" name="id_lista" value="<?= $lista->id?>">
			
			<input  class="btn" type="submit" value="registrar lista de libros">
		</fieldset>
	</form>
</div>
