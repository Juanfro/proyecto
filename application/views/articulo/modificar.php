<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>articulo/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idArticulo"> Modificar Artículo</label>
			</legend>
			
			<label for="titulo">Titulo</label>
		 	<input type="text" name="titulo" id="titulo" placeholder="<?=$articulo->titulo ?>"></input><br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" placeholder="<?=$articulo->contenido ?>"></textarea><br><br>				
			
			
			<input type="hidden" name="id_autores" value="<?= $articulo->id?>">
			
			<input type="submit" value="realiza artículo">
		</fieldset>
		
	</form>
	
</div>

