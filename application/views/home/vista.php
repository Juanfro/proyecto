<div class='container'>

	<div class="header col-md-12">	
				<!-- limite de articulos mostrados -->			
	<?php $articulos = R::findCollection('articulo','ORDER BY fecha DESC LIMIT 4');?>			  
		 
	<?php while($articulo = $articulos->next()):?>
		 
		<div class='col-md-5 expandable' id='contarticulo'>
			<?=$articulo->contenido; ?>
		</div> 
	  
	<?php endwhile;?>
	</div>

</div>
