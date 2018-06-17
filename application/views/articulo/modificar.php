<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>articulo/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idArticulo"> Modificar Artículo</label>
			</legend>
			<div class="form-group">
				<label  class="control-label col-sm-2" for="titulo">Titulo</label>
		 		<div class="col-sm-4">
		 			<input type="text" name="titulo" id="titulo" value="<?=$articulo->titulo ?>"></input><br><br>
				</div>
			</div>
			<div class="form-group">	
				<label  class="control-label col-sm-2" for="contenido">Contenido</label> 
				<div class="col-sm-8">
					<textarea name="contenido" id="contenido" placeholder="<?=$articulo->contenido ?>"></textarea><br><br>				
				</div>
		  	</div>	
			<input type="hidden" name="id_articulo" value="<?= $articulo->id?>">
			
			<input  class="btn" type="submit" value="realiza artículo">
		</fieldset>
		
	</form>
	
</div>

