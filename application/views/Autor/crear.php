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
			<input type="text" name="pseudonimo" id="pseudonimo"></input><br>
			<br> <input type="submit" value="registrar Autor">
			
			<!-- Fecha nacimiento, Imagen -->
		</fieldset>
	</form>

</div>
