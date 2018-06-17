<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>Libro/crearpost" method="post">
		<fieldset>
			<legend>
				<!-- ya con  fieldset -->
				<label for="idlibro">Datos del Libro</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="isbn">ISBN</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="isbn" id="isbn" required="required" onblur="validarISBN()"></input>
						<div id="pasaFormato"></div>
						<div id="pasaISBN"></div>
				</div>		
			</div>		
			<div class="form-group">
				<label class="control-label col-sm-2" for="titulo">Título</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="titulo" id="titulo" required="required"></input>
				</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-sm-2" for="autorSelect">autor</label>
				<div class="col-sm-10"> 
					<select name="autor[]" id="autorSelect" required="required" multiple="multiple">
						<option  class="form-control col-sm-10" value="">Elige un Autor</option>
						<?php foreach ($body['autores'] as $autor): ?>
						<option class="form-control col-sm-10" value="<?= $autor['id']?>"><?=$autor['nombre']?></option>
						<?php endforeach;?>
					</select>
				</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-sm-2"  for="generoSelect">Género</label>
				<div class="col-sm-10">
					<select name="genero[]" id="generoSelect" multiple="multiple">
						<option  class="form-control col-sm-10" value="">Elige un género</option>
						<?php foreach ($body['generos'] as $genero):?>
						<option  class="form-control col-sm-10" value="<?= $genero['id']?>"><?= $genero['nombre']?></option>
						<?php endforeach;?> 
					</select>
			   </div>
			</div>   		
			<div class="form-group">
				<label class="control-label col-sm-2"  for="idioma">Idioma</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="idioma" id="idioma"></input>
				</div> 
			</div>
			<div class="form-group">		
				<label  class="control-label col-sm-2" for="npalabras">Nº Paginas</label>
				<div class="col-sm-2">
					<input  class="form-control" type="text" name="npalabras" id="npalabras"></input>
				</div>
			</div>
			<div class="form-group">		
				<label  class="control-label col-sm-2" for="sinopsis">Sinopsis</label>
				<div class="col-sm-10">
			    	<textarea  class="form-control col-sm-10 " rows="5" cols="10" name="sinopsis" id="sinopsis"></textarea><br> <br>
				</div>
			</div>
			
			<div class="form-group">
				<label  class="control-label col-sm-2" for="edadminima">Edad Minima Recomendada</label>
				<div class="col-sm-2">
					<input  class="form-control" type="text" name="edadminima" id="edadminima"></input><br> <br> 
				</div>
			</div>
				
			<input class="btn"  type="submit" value="Registrar Libro">
		</fieldset>
	</form>


</div>
