<div class='container vista-home'>

	<div class="header col-md-12">
	<!-- <pre><?//=print_r($articulos)?></pre> -->
	
	
				<!-- limite de articulos mostrados -->			
	<?php $articulos = R::findCollection('articulo','ORDER BY fecha DESC LIMIT 4');?>			
	
	<!-- <pre><?//=print_r($_SESSION['usuario'])?></pre> -->
	 <!-- <pre><?//=print_r($usuario)?></pre> -->
		 
		 
	<?php while($articulo = $articulos->next()):?>
		 
		<div class='col-md-5 expandable 
			<?=( isset($_SESSION['usuario']) && 
					(	array_intersect($articulo->sharedAutorList, $usuario->sharedAutorList) || 
						array_intersect($articulo->sharedLibroList, $usuario->sharedLibroList) 
					) 
				)  ?
			'seguido' : 'no-seguido' ?>'
			 id='contarticulo'>
			 
			<?=$articulo->contenido; ?>
		</div> 
	  
	<?php endwhile;?>
	</div>

</div>
