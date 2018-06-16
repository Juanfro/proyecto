<div class="container">

	<!--filtro titulo  -->
	<form action="<?=base_url()?>Libro/listarPost" method="post">
		<label for='idfiltro'>Filtro</label>
		<input id='idfiltro' type="text" name='filtro' value=''> 
		
	</form>
	<br>
	<form action="<?= base_url()?>Libro/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit" ></button>
	</form>
	<br>
	<table class=" table table-bordered sortable">
		<thead>
			<tr class="jcorgFilterTextParent">
				<th>ISBN</th>
				<th>Título</th>
				<th>Autor</th>
				<th>Idioma</th>
				<th>Genero</th>
				<th>nº palabras</th>
				<th>Sinopsis</th>
				
				<th>Edad Minima</th>
				<th>Valoracion</th>				
				<?php if(isset ($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' || $_SESSION['usuario']['rol'] == 'editor')):?>
					<th>Editar</th>
					<th>Borrar</th>
				<?php endif;?>		
				<?php if(isset($_SESSION['usuario']) ):?>
					<th>Seguir</th>
					<th>Valorar</th>
				<?php endif;?>		
				
				
			</tr>
		</thead>
		<!--  <pre><code><?= print_r($libros)?></code></pre>-->
		<tbody>
		<?php foreach ($libros as $libro): ?>
			<tr >
				<td><?=$libro->isbn ?></td>
				<td >
				<a href="<?= base_url()?>libro/perfil/<?=$libro->id ?>" class="jcorgFilterTextChild"> 
				<?=$libro->titulo?>
				</a>
					
				</td>
				

				<td class="jcorgFilterTextChild">
					<?php foreach ($libro->sharedAutorList as $autor): ?>
						<?= $autor->nombre ."</br> "; ?> 
					<?php endforeach; ?> 
				</td>

				<td><?=$libro->idioma ?></td>
				<td class="jcorgFilterTextChild">
				<?php foreach ($libro->sharedGeneroList as $genero): ?>
			      	<?= $genero->nombre ."</br> "; ?> 			   
			   	<?php endforeach; ?>
				</td>

				<td><?=$libro->npalabras ?></td>

				<td>
				<div class="expandable">
				<?=$libro->sinopsis ?>
				</div>
				</td>
				
				<td><?=$libro->edadminima ?></td>
				<td>
					<?php
						$id_libro = $libro->id;
						/*
						 * $valoracion=R::findOne('valoracion','id=?',[$id_libro]);
						 * echo " nota: ",$valoracion->id." contenido: ".$valoracion->contenido;
						 */
						
						$valoracion = R::findCollection('valoracion', 'ORDER BY nota ASC ');
						while ($valoraciones = $valoracion->next()) {
							$idvlibro = $valoraciones->libro_id;
							
							/* echo "longitud de valoraciones ".$longvaloracion; */
							if ($idvlibro == $id_libro) {
								
								$nota = $valoraciones->nota;
								$ides = [];
								
								if($nota==NULL){}
								else{
								 array_push($ides, $nota);
								
								echo array_sum($ides);
									}
									
									
								
								
								//echo "nota " . $nota . " contenido " . $valoraciones->nota;
							}
						}
					?>
				 
			 	</td>
			 	
			 	<?php if(isset ($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' || $_SESSION['usuario']['rol'] == 'editor')):?>
				 	<!-- Modificar -->
				 	<td>
						<form action="<?=base_url()?>Libro/modificar" method="post">
							<input type="hidden" name="id_libro" value="<?=$libro->id?>" /> <input type="hidden"
								name="filtro" value="<?=$filtro ?>" />
							<button class=" glyphicon glyphicon-edit" type="submit"></button>
						</form>
					</td>
					<!-- Modificar -->
					<td>
						<form action="<?=base_url()?>Libro/borrar" method="post">
							<input type="hidden" name="id_libro" value="<?=$libro->id?>" />
							<button class="glyphicon glyphicon-remove" type="submit"></button>
						</form>
					</td>
			 	<?php endif;?>
			 	
			 	<!-- Seguir -->
			 	
			 	<?php if(isset($_SESSION['usuario']) ):?>
				 	<td>
						<form action="<?= base_url()?>Libro/seguir" method="post">
							<input type="hidden" name="id_libro" value="<?=$libro->id?>">
							<button class="glyphicon glyphicon-heart" type="submit"></button>
						</form>
					</td>
					<td>
						<form action="<?= base_url()?>valoracion/crear" method="post">
							<input type="hidden" name="id_libro" id="id_libro" value="<?= $libro->id?>" />
							<button class="glyphicon glyphicon-star-empty" type="submit"></button>
						</form>
					</td>
			 	<?php endif;?>				

				
			</tr>
			 
         <?php endforeach; ?>
         </tbody>
	</table>
<form action="<?= base_url()?>Libro/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
</div>
