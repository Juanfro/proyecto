<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>ListaLibros/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idlistalibros"> Lista de libros</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="nombre">Nombre</label> 
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nombre" id="nombre"></input>
				</div>
			</div>	
			<div class="form-group">	
				<label  class="control-label col-sm-2" for="libros">Libros</label>
				<div class="col-sm-10">
					<select multiple  name="libros[]" id="libros">								
						<?php foreach ($libros as $libro): ?>
						<option class="form-control col-sm-10"  value="<?=$libro->id ?>"><?=$libro->titulo ?></option>
				 		<?php endforeach;?>
					</select>
				</div>
			</div>		
			<div class="form-group">	
				<label class="control-label col-sm-2" >Descripción</label>
				<div class="col-sm-10">	
					<textarea  class="form-control col-sm-10 " rows="5" cols="10" name="descripcion" id="descripcion"  ></textarea>
			    </div>
			</div>    
			<input  class="btn" type="submit" value="Registrar Lista de Libros">
		</fieldset>
	</form>
	
</div>