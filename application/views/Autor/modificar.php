<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Autor/modificarpost" method="post">
		
			<legend>
				<label for="idAutor"> Introducir los datos para modificar  Autor</label>
			</legend>
			<label for="nombre">Nombre</label> 
				<input type="text" name="nombre"
				id="nombre" placeholder="<?= $autor->nombre?>"></input><br><br>
				
				<label for="pseudonimo">Pseudonimo</label> <input type="text" name="pseudonimo"
				id="pseudonimo" placeholder="<?= $autor->pseudonimo?>"></input><br><br>
				
				<label for="biografia">Biografia</label> <input type="text" name="biografia"
				id="biografia" placeholder="<?= $autor->biografia ?>"></input><br><br>
				
				<label for="anodenacimiento">Año de Nacimiento</label> <input type="text" name="anodenacimiento"
				id="anodenacimiento" placeholder="<?= $autor->anodenacimiento?>"></input><br><br>
				
				<label for="pais">País</label>
				
			<select id="pais" name="pais">
				<option value="">Elige un pais</option>
				<?php foreach($body['paises'] as $pais):?>
					<option value="<?= $pais['id']?>"> <?= $pais['nombre']?> </option>
				<?php endforeach;?>
			</select>
				
				<input type="hidden" name="id_autor" value="<?= $autor->id?>">
			
			
			<input type="submit" value="modificar Autor">
		
	</form>
	
</div>
