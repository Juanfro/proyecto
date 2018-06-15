<div class="container" style="margin-bottom:70px ">
	<form class="form" id="idForm" action="<?=base_url()?>articulo/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idArticulo"> Artículo</label>
			</legend>
			
			<label for="titulo">Titulo</label>
		 	<input type="text" name="titulo" id="titulo" required="required"></input><br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" required="required"></textarea><br><br>
			
			<label for="autores[]">Autores mencionados</label><br><br>
			<select multiple name="autores[]" id="autores[]">			 
				<?php foreach ($autores as $autor): ?>
					<option value="<?=$autor->id ?>"><?=$autor->nombre ?></option>
	 			<?php endforeach;?>
		    </select><br><br>
			    
			<label for="libros">Libros mencionados</label><br><br>
			<select multiple="multiple" name="libros[]" id="libros">								
				<?php foreach ($libros as $libro): ?>
					<option value="<?=$libro->id ?>"><?=$libro->titulo ?></option>
			 	<?php endforeach;?>
			</select>   
			
			<input type="submit" value="realiza artículo">
		</fieldset>
		
	</form>
	
</div>

