<div class="container">

	<!--filtro titulo  -->
	<form action="<?=base_url()?>Libro/listarPost" method="post">
		<label for='idfiltro'>filtro</label>
		<input id='idfiltro' type="text" name='filtro'  value='<?=$filtro?>'> 
		<input  type="submit" value="filtrar titulo">
	</form>
	<table class=" table table-bordered sortable">
		<thead>
			<tr>
				<th>ISBN</th>
				<th>Título</th>
				<th>autor</th>
				<th>Idioma</th>
				<th>Genero</th>
				<th>nº palabras</th>
				<th>Sinopsis</th>
				<th>Edicion</th>
				<th>Edad Minima</th>
				<th>Editar</th>
				<th>Borrar</th>
				<th>Seguir</th>
				<th>Perfil</th>
				<th>Valoracion</th>
			</tr>
		</thead>
		<!--  <pre><code><?= print_r($libros)?></code></pre>-->
		<tbody >
		<?php foreach ($libros as $libro): ?>
			<tr class="jcorgFilterTextParent">
				<td><?=$libro->isbn ?></td>
				<td class="jcorgFilterTextChild" >
					<div  >
						<?=$libro->titulo?>
					</div>
				</td>

				<td>
					<?php foreach ($libro->sharedAutorList as $autor): ?>
						<?= $autor->nombre ."</br> "; ?> 
					<?php endforeach; ?>
				</td>

				<td><?=$libro->idioma ?></td>
				<td>
				<?php foreach ($libro->sharedGeneroList as $genero): ?>
			      	<?= $genero->nombre ."</br> "; ?> 			   
			   	<?php endforeach; ?>
				</td>
				
				<td><?=$libro->npalabras ?></td>

				<td><?=$libro->sinopsis ?></td>
				<!--edición quitar  -->
				<td><?=$libro->edicion ?></td>
				<td><?=$libro->edadminima ?></td>
				<td>
					<form action="<?=base_url()?>Libro/modificar" method="post">
						<input type="hidden" name="id_libro" value="<?=$libro->id?>" /> 
						<input type="hidden" name="filtro" value="<?=$filtro ?>" />
						<button class=" glyphicon glyphicon-edit" type="submit"></button>
					</form>
				</td>
				<td>
					<form action="<?=base_url()?>Libro/borrar" method="post">
						<input type="hidden" name="id_libro" value="<?=$libro->id?>" />
						<button class="glyphicon glyphicon-remove" type="submit"></button>
					</form>
				</td>
				<td>
					<form action="<?= base_url()?>Libro/seguir" method="post">
						<input type="hidden" name="id_libro" value="<?=$libro->id?>">
						<button class="glyphicon glyphicon-heart" type="submit"></button>
					</form>
				</td>
				<td>
					<form action="<?= base_url()?>Libro/perfil" method="post">
						<input type="hidden" name="id_libro" id="id_libro" value="<?= $libro->id?>" />
						<button class="glyphicon glyphicon-book" type="submit"></button>
					</form>
				</td>
				<td>
					<form action="<?= base_url()?>valoracion/crearPost" method="post">
						<input type="hidden" name="id_libro" id="id_libro" value="<?= $libro->id?>" />
						<button class="glyphicon glyphicon-star-empty" type="submit"></button>
					</form>
				</td>
			</tr>
			 
         <?php endforeach; ?>
         </tbody>
	</table>

</div>
