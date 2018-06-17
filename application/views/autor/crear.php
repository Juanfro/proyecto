<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>Autor/crearpost" method="post">
		<fieldset>
			<legend>
				<label class="control-label col-sm-4" for="idAutor"> Datos del Autor</label>
			</legend>
			<div class="form-group">
				<label class="control-label col-sm-2" for="nombre">Nombre</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="nombre" id="nombre"></input>
				</div>
			</div>
			<div class="form-group">		
				<label class="control-label col-sm-2" for="pseudonimo">Pseudonimo</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="pseudonimo" id="pseudonimo"></input>
			    </div>
			 </div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="biografia">Biografia</label>
				<div class="col-sm-10">
					<textarea  class="form-control col-sm-10 " rows="5" cols="10" name="biografia" id="biografia"></textarea>
				</div>	
			</div>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="anodenacimiento">Año de Nacimiento</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="anodenacimiento" id="anodenacimiento"></input>
				</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-sm-2" for="pais">País</label>
				<div class="col-sm-10">
					<select id="pais" name="pais">
						<option class="form-control col-sm-10"  value="">Elige un pais</option>
						<?php foreach($body['paises'] as $pais):?>
						<option  class="form-control col-sm-10" value="<?= $pais['id']?>"> <?= $pais['nombre']?> </option>
						<?php endforeach;?>
					</select>
			   	</div>
			</div>   
			 <input  class="btn" type="submit" value="Registrar Autor">
			
			<!-- Fecha nacimiento, Imagen -->
		</fieldset>
	</form>

</div>
