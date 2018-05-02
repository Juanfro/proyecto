<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Libro/modificarpost" method="post">
		
		<legend>
				<label for="idlibro"> introducir los datos del libro</label>
			</legend>
			<label for="isbn">ISBN</label> <input type="text" name="isbn"
				id="isbn" placeholder="<?= $libros->nombre?>"></input><br><br>
				<label for="autor">autor</label> <input type="text" name="autor"
				id="autor" placeholder="<?= $libros->nutor?>"></input><br><br>
				<label for="idioma">Idioma</label> <input type="text" name="idioma"
				id="idioma" placeholder="<?= $libros->idioma?>"></input><br><br>
				<label for="npalabras">Nº Palabras</label> <input type="text" name="npalabras"
				id="npalabras" placeholder="<?= $libros->npalabras?>"></input><br><br>
				<label for="sinopsis">Sinopsis</label> <input type="text" name="sinopsis"
				id="sinopsis" placeholder="<?= $libros->sinopsis?>"></input><br><br>
				<label for="edicion">Edicion</label> <input type="text" name="edicion"
				id="edicion" placeholder="<?= $libros->edicion?>"></input><br><br>
				<label for="edadminima">Edad Minima Recomendada</label> <input type="text" name="edadminima"
				id="edadminima" placeholder="<?= $libros->edadminima?>"></input><br><br>
			
			<input type="hidden" name="id_libros" value="<?= $libros->id?>">
			<input type="submit" value="modificar libro">
		
		
	</form>
	
</div>

