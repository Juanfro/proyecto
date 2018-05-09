<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Libro/crearpost" method="post">

		<legend>
			<label for="idlibro"> introducir los datos del libro</label>
		</legend>
		<label for="isbn">ISBN</label>
		<input type="text" name="isbn" id="isbn" required="required"></input><br> <br>
		
		<label for="titulo">Título</label>
		<input type="text" name="titulo" id="titulo" required="required"></input><br> <br>

<!-- 
		<label for="autor">autor</label>
		<input type="text" name="autor" id="autor"></input><br> <br><!-- TODO: Obtener autores de bases de datos -->
 -->		
		<label for="autorSelect">autor</label>
		<select name="autor" id="autor">
			<?php foreach ($body['autores'] as $autor): ?>
				<option value="<?= $autor['id']?>"><?=$autor['nombre']?></option>
			<?php endforeach;?>
		</select><br> <br>
		
		<label for="idioma">Idioma</label>
		<input type="text" name="idioma" id="idioma"></input><br> <br>
		
		<label for="npalabras">Nº Palabras</label>
		<input type="text" name="npalabras" id="npalabras"></input><br> <br>
		
		<label for="sinopsis">Sinopsis</label>
		<input type="text" name="sinopsis" id="sinopsis"></input><br> <br>
		
		<label for="edicion">Edicion</label>
		<input type="text" name="edicion" id="edicion"></input><br> <br>
		
		<label for="edadminima">Edad Minima Recomendada</label>
		<input type="text" name="edadminima" id="edadminima"></input><br> <br> <input type="submit"
			value="registrar libro">

	</form>

</div>
