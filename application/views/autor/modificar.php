<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>Autor/modificarpost" method="post">
		<fieldset>
			<legend>
				<label for="idAutor"> Introducir los datos para modificar  Autor</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2"for="nombre">Nombre</label> 
				<div class="col-sm-4">
					<input type="text" name="nombre"
				     id="nombre" placeholder="<?= $autor->nombre?>"></input><br><br>
				</div>
			</div>
			<div class="form-group">	
				<label  class="control-label col-sm-2" for="pseudonimo">Pseudonimo</label> 
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="pseudonimo" id="pseudonimo" placeholder="<?= $autor->pseudonimo?>"></input>
				</div>
			</div>
			<div class="form-group">	
				<label class="control-label col-sm-2" for="biografia">Biografia</label> 
				<div class="col-sm-10">
					<textarea class="form-control"  rows="5" cols="10" type="text" name="biografia" id="biografia" placeholder="<?= $autor->biografia ?>"></textarea>
				</div>
			</div>	
			<div class="form-group">	
				<label class="control-label col-sm-2" for="anodenacimiento">Año de Nacimiento</label> 
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="anodenacimiento" id="anodenacimiento" placeholder="<?= $autor->anodenacimiento?>"></input>
				</div>
			</div>	
			<div class="form-group">	
				<label  class="control-label col-sm-2" for="pais">País</label>
				<div class="col-sm-4">
					<select  class="form-control col-sm-4" id="pais" name="pais">
						<option value="">Elige un pais</option>
						<?php foreach($body['paises'] as $pais):?>
						<option value="<?= $pais['id']?>"> <?= $pais['nombre']?> </option>
						<?php endforeach;?>
					</select>
				</div>
			</div>	
				<input type="hidden" name="id_autor" value="<?= $autor->id?>">
			
			
			<input  class="btn" type="submit" value="modificar Autor">
		
	</form>
	
</div>
