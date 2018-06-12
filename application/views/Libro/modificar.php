<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Libro/modificarpost" method="post">
		
		<legend>
				<label for="idlibro"> introducir los datos del libro</label>
			</legend>
			<label for="isbn">ISBN</label> <input type="text" name="isbn"
				id="isbn" placeholder="<?= $libro->isbn?>"></input><br><br>
				<label for="autor">Titulo</label> <input type="text" name="titulo"
				id="autor" placeholder="<?= $libro->titulo?>"></input><br><br>
				<label for="autor">Autor</label> 
				<select name="autor[]" id="autorSelect" required="required" multiple="multiple">
				<option value="">Elige un Autor</option>
				<?php foreach ($body['autores'] as $autor): ?>
					<option value="<?= $autor['id']?>"><?=$autor['nombre']?></option>
				<?php endforeach;?>
			</select><br> <br>
				<label for="idioma">Idioma</label> <input type="text" name="idioma"
				id="idioma" placeholder="<?= $libro->idioma?>"></input><br><br>
				<label for="generoSelect">Género</label>
			<select name="genero[]" id="generoSelect" multiple="multiple">
				<option value="">Elige un género</option>
				<?php foreach ($body['generos'] as $genero):?>
					<option value="<?= $genero['id']?>"><?= $genero['nombre']?></option>
				<?php endforeach;?> 
			</select><br> <br>
			
				<label for="npaginas">Nº Paginas</label> <input type="text" name="npalabras"
				id="npalabras" placeholder="<?= $libro->npalabras?>"></input><br><br>
				<label for="sinopsis">Sinopsis</label> <input type="text" name="sinopsis"
				id="sinopsis" placeholder="<?= $libro->sinopsis?>"></input><br><br>
				
				<label for="edadminima">Edad Minima Recomendada</label> <input type="text" name="edadminima"
				id="edadminima" placeholder="<?= $libro->edadminima?>"></input><br><br>
			
			<input type="hidden" name="id_libro" value="<?= $libro->id?>">
			<input type="submit" value="modificar libro">
		
		
	</form>
	
</div>

