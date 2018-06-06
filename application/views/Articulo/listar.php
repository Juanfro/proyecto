<div class="container">


	<table class="table table-bordered sortable">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Contenido</th>
				<th>autor</th>
				<th>Modificar</th>
				<th>Borrar</th>
				<th>Ir al artículo</th>
			</tr>
		</thead>
		<tbody>
			<pre>
				<code><?php /*print_r($articulos) */?></code>
			</pre>
		<?php foreach ($articulos as $articulo): ?>
			<tr>
				<td>
			<a href=<?= base_url()?>Articulo/mostrar/<?=$articulo->id ?>> 
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

</div>

