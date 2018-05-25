<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Autor/crearpost" method="post">
		<fieldset>
			<legend>
				<label for="idAutor"> Introducir los datos del Autor</label>
			</legend>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre"></input><br>
			<br>
			<label for="pseudonimo">Pseudonimo</label>
			<input type="text" name="pseudonimo" id="pseudonimo"></input><br><br>
			
			<label for="biografia">Biografia</label>
			<textarea name="biografia" id="biografia"></textarea><br><br>
			
			<label for="anodenacimiento">Año de Nacimiento</label>
			<input type="text" name="anodenacimiento" id="anodenacimiento"></input><br><br>
			
			<label for="pais">País</label>
			<select id="pais" name="pais">
				<option value="">Elige un pais</option>
				<?php foreach($body['paises'] as $pais):?>
					<option value="<?= $pais['id']?>"> <?= $pais['nombre']?> </option>
				<?php endforeach;?>
			</select>
			<br><br>
			<br> <input type="submit" value="registrar Autor">
			
			<!-- Fecha nacimiento, Imagen -->
		</fieldset>
	</form>

</div>
