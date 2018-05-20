<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>articulo/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idArticulo"> Artículo</label>
			</legend>
			
			<label for="titulo">Titulo</label>
		 	<input type="text" name="titulo" id="titulo" required="required"></input><br><br>
				
			<label for="contenido">Contenido</label> 
			<textarea name="contenido" id="contenido" required="required"></textarea><br><br>				
			
			
			
			<input type="submit" value="realiza artículo">
		</fieldset>
		
	</form>
	
</div>

