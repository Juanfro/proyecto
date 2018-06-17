<div class='container vista-home'>
	<!-- <div class="contenidos col-md-12"> -->	
					<!-- limite de articulos mostrados -->			
		<?php $articulos = R::findCollection('articulo','ORDER BY fecha DESC LIMIT 4');?>
		
		<!-- <div class="container"> -->
		
			<?php while($articulo = $articulos->next()):?>
				<div class='col-md-12 expandable articulo-home contenido-articulo
					<?=( isset($_SESSION['usuario']) && 
							(	array_intersect($articulo->sharedAutorList, $usuario->sharedAutorList) || 
								array_intersect($articulo->sharedLibroList, $usuario->sharedLibroList) 
							) 
						)  ?
					'seguido' : 'no-seguido' ?>'
				>
						 
					 <div class="">						 
						 	<h1>
						 		<a href="<?= base_url()?>Articulo/mostrar/<?=$articulo->id?>" class="articulo-titulo">
						 			<?= $articulo->titulo?>
						 		</a>	
						 	</h1>
						 							 
						 <div class="expandable">
						 	<?=$articulo->contenido; ?>
						 </div>
					 </div>	
				</div>
				 				 
			<?php endwhile;?>
		<!-- </div> -->
	<!-- </div> -->

</div>
