<div class="container" style="margin-bottom:70px ">
	<form class="form-horizontal"  id="idForm" action="<?=base_url()?>articulo/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idArticulo"> Artículo</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="titulo">Titulo</label>
				<div class="col-sm-4">
		 			<input  class="form-control" type="text" name="titulo" id="titulo" required="required"></input>
				</div>
			</div>
			<div class="form-group">	
				<label  class="control-label col-sm-2" for="contenido">Contenido</label> 
				<div class="col-sm-10">
					<textarea name="contenido" id="contenido" required="required"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2"  for="autores[]">Autores mencionados</label>
				<div class="col-sm-10">  
					<select multiple name="autores[]" id="autores[]">			 
						<?php foreach ($autores as $autor): ?>
						<option class="form-control col-sm-10" value="<?=$autor->id ?>"><?=$autor->nombre ?></option>
	 					<?php endforeach;?>
		        	</select>
		        </div>
			</div>
			<div class="form-group">		    
				<label  class="control-label col-sm-2" for="libros[]">Libros mencionados</label>
			    <div class="col-sm-10">
					<select multiple="multiple" name="libros[]" id="libros">								
						<?php foreach ($libros as $libro): ?>
						<option class="form-control col-sm-10"  value="<?=$libro->id ?>"><?=$libro->titulo ?></option>
			 			<?php endforeach;?>
					</select>   
				</div>
		   </div>		
			<input  class="btn" type="submit" value="Crear Artículo">
		</fieldset>
		
	</form>
	
</div>

