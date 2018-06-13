<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Libro/crearpost" method="post">
		<fieldset>
			<legend>
				<!-- ya con  fieldset -->
				<label for="idlibro"> introducir los datos del libro</label>
			</legend>
			<label for="isbn">ISBN</label>
			<input type="text" name="isbn" id="isbn" required="required" onblur="validarISBN()"></input>
			<div id="pasaFormato"></div>
			<div id="pasaISBN"></div>
			<br> <br>			

			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" required="required"></input><br> <br>

			<label for="autorSelect">autor</label>
			<select name="autor[]" id="autorSelect" required="required" multiple="multiple">
				<option value="">Elige un Autor</option>
				<?php foreach ($body['autores'] as $autor): ?>
					<option value="<?= $autor['id']?>"><?=$autor['nombre']?></option>
				<?php endforeach;?>
			</select><br> <br>

			<label for="generoSelect">Género</label>
			<select name="genero[]" id="generoSelect" multiple="multiple">
				<option value="">Elige un género</option>
				<?php foreach ($body['generos'] as $genero):?>
					<option value="<?= $genero['id']?>"><?= $genero['nombre']?></option>
				<?php endforeach;?> 
			</select><br> <br>

			<label for="idioma">Idioma</label>
			<input type="text" name="idioma" id="idioma"></input><br> <br>

			<label for="npalabras">Nº Paginas</label>
			<input type="text" name="npalabras" id="npalabras"></input><br> <br>

			<label for="sinopsis">Sinopsis</label>
			<textarea name="sinopsis" id="sinopsis"></textarea><br> <br>

			

			<label for="edadminima">Edad Minima Recomendada</label>
			<input type="text" name="edadminima" id="edadminima"></input><br> <br> 
			
			<input type="submit" value="registrar libro">
		</fieldset>
	</form>


</div>
