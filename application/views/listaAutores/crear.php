<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>ListaAutores/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idlistautores"> Lista de Autores</label>
			</legend>
			<div class="form-group">
				<label class="control-label col-sm-2" for="nombre">Nombre</label> 
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="nombre" id="nombre"></input>
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2"  for="autores[]">Autores</label>
				<div class="col-sm-10">
					<select multiple name="autores[]" id="autores[]">			 
							<?php foreach ($autores as $autor): ?>
							<option  class="form-control col-sm-10" value="<?=$autor->id ?>"><?=$autor->nombre ?></option>
			 				<?php endforeach;?>
				    </select>
				</div>
			</div>	    
			<div class="form-group">
				<label class="control-label col-sm-2" for="deesccripcion">Descripción</label>
				<div class="col-sm-10">	
					<textarea  class="form-control col-sm-10 " rows="5" cols="10" name="descripcion" id="descripcion"></textarea>
				</div>
			</div>	
				<input class="btn" type="submit" value="Registrar Lista de Autores">
			
		</fieldset>
		

	</form>
	
</div>
