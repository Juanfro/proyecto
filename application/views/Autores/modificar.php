<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Autor/modificarpost" method="post">
		
			<legend>
				<label for="idAutor"> Introducir los datos para modificar  Autor</label>
			</legend>
			<label for="nombre">Nombre</label> 
				<input type="text" name="nombre"
				id="nombre" placeholder="<?= $autores->nombre?>"></input><br><br>
				<label for="pseudonimo">Pseudonimo</label> <input type="text" name="pseudonimo"
				id="pseudonimo" placeholder="<?= $autores->pseudonimo?>"></input><br><br>
				
				<input type="hidden" name="id_autores" value="<?= $autores->id?>">
			
			
			<input type="submit" value="modificar Autor">
		
	</form>
	
</div>
