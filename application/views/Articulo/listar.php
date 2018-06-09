<div class="container">

   <form  method="post">
		<label for='idfiltro'>Filtro</label>
		<input id='idfiltro' type="text" name='filtro' value=''> 
	</form>
	<br>
	<form action="<?= base_url()?>Articulo/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>	
	<br>
	
	<table class="table table-bordered sortable">
		<thead>
			<tr class="jcorgFilterTextParent">
				<th>Titulo</th>
				<th>Contenido</th>
				<th>autor</th>
				<th>Modificar</th>
				<th>Borrar</th>
				<th>Ir al artículo</th>
			</tr>
		</thead>
		<tbody>
			
		<?php foreach ($articulos as $articulo): ?>
			<tr>
			
				<td>
			<a href=<?= base_url()?>Articulo/mostrar/<?=$articulo->id ?> class="jcorgFilterTextChild"> 
			<?=$articulo->titulo ?></a>	
			
				</td>
				<td>
				  <div class="expandable">
				    <?=$articulo->contenido ?>
				 </div>
				</td>
				<td>
				 <?php
			$id_autor = $articulo->usuarioautor_id;
			$autor = R::findOne('usuario', 'id=?', [
				$id_autor
			]);
			echo $autor->nombre;
			?>
			 </td>
				<td>
					<form action="<?=base_url()?>Articulo/modificar" method="post">
						<input type="hidden" name="id_articulo" " value="<?=$articulo->id?>" />

						<button class=" glyphicon glyphicon-edit" type="submit" />
					</form>
				</td>
				<td>
					<form action="<?=base_url()?>Articulo/borrar" method="post">
						<input type="hidden" name="id_articulo" value="<?=$articulo->id?>" />
						<button class="glyphicon glyphicon-remove" type="submit"></button>
					</form>
				</td>
				
				<td>
					<form action="<?=base_url()?>Articulo/mostrar" method="post">
						<input type="hidden" name="id_articulo" value="<?=$articulo->id?>" />
						<button class="glyphicon glyphicon-book" type="submit"></button>
					</form>
				</td>

			</tr>
			 
         <?php endforeach; ?>
         </tbody>
	</table>
	<form action="<?= base_url()?>Articulo/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
</div>