<div class="container">

	<form method="post">
		<label for='idfiltro'>Filtro</label>
		<input id='idfiltro' type="text" name='filtro' value=''>
	</form>
	<br>
	<form action="<?= base_url()?>Articulo/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
	<br>
	
	<!-- <pre><?= print_r($usuario->sharedAutorList)?></pre>-->

	<table class="table table-bordered sortable">
		<thead>
			<tr class="jcorgFilterTextParent">
				<th>Titulo</th>
				<th>Contenido</th>
				<th>autor</th>
				
				<?php if( isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol']=='administrador' || $_SESSION['usuario']['rol']=='editor' ) ):?>
				<th>Modificar</th>
				<th>Borrar</th>				
				<?php endif;?>
			</tr>
		</thead>
		
		<tbody>			
			<?php foreach ($articulos as $articulo): ?>
			
				<!-- <pre><?= print_r($articulo->sharedAutorList) ?></pre> -->
				<!--  <pre><?= print_r($articulo->sharedLibroList) ?></pre> -->
			
				<tr <?= ( isset($_SESSION['usuario']) && (array_intersect($articulo->sharedAutorList, $usuario->sharedAutorList) || array_intersect($articulo->sharedLibroList, $usuario->sharedLibroList) ) )  ? 'class="seguido"' : 'class="no-seguido"'?>>
					<!-- Titulo -->
					<td>
						<a href="<?= base_url()?>Articulo/mostrar/<?=$articulo->id?>" class="jcorgFilterTextChild"> 
							<?=$articulo->titulo ?>
						</a>						
					</td>
					
					<!-- Contenido -->
					<td>
						<div class="expandable">
						    <?=$articulo->contenido ?>
						</div>
					</td>
					
					<!-- Autor -->
					<td>
						<?php
							$id_autor = $articulo->usuario_id;
							$autor = R::findOne('usuario', 'id=?', [$id_autor]);
							echo $autor->nombre;
						?>
					</td>
					 
					<?php if( isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol']=='administrador' || $_SESSION['usuario']['rol']=='editor' ) ):?>
						<!-- Modificar -->
						<td>
							<form action="<?=base_url()?>Articulo/modificar" method="post">
								<input type="hidden" name="id_articulo" value="<?=$articulo->id?>" />
				
								<button class=" glyphicon glyphicon-edit" type="submit"></button>
							</form>
						</td>
						
						<!-- Borrar -->
						<td>
							<form action="<?=base_url()?>Articulo/borrar" method="post">
								<input type="hidden" name="id_articulo" value="<?=$articulo->id?>" />
								<button class="glyphicon glyphicon-remove" type="submit"></button>
							</form>
						</td>				
					<?php endif;?>	 
			<?php endforeach; ?>
		         </tbody>
	</table>
	<form action="<?= base_url()?>Articulo/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
</div>