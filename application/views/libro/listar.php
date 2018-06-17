<div class="container">

	<!--filtro titulo  -->
	<input type="text" id="myInput" onkeyup="myFunction()" 
	placeholder="Titulo" title="Type in a name">
	
	<br>
	<form action="<?= base_url()?>Libro/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit" ></button>
	</form>
	<br>
	<table class=" table table-bordered" id="myTable">
		<thead>
			<tr class="jcorgFilterTextParent">
				
				<th>Título</th>
				<th>ISBN</th>
				<th>Autor</th>
				<th>Idioma</th>
				<th>Genero</th>
				<th>nº páginas</th>
				<th>Sinopsis</th>
				
				<th>Edad Recomendada</th>
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
				<!-- Titulo -->
				<td>
					<a href="<?= base_url()?>libro/perfil/<?=$libro->id ?>" class="jcorgFilterTextChild"> 
					<?=$libro->titulo?>
					</a>					
				</td>
				
				<!-- ISBN -->
				<td><?=$libro->isbn ?></td>				
				
				<!-- Autor -->
				<td class="jcorgFilterTextChild">
					<?php foreach ($libro->sharedAutorList as $autor): ?>
						<?= $autor->nombre ."</br> "; ?> 
					<?php endforeach; ?> 
				</td>
				
				<!-- idioma -->
				<td><?=$libro->idioma ?></td>
				
				<!-- Género -->
				<td class="jcorgFilterTextChild">
				<?php foreach ($libro->sharedGeneroList as $genero): ?>
			      	<?= $genero->nombre ."</br> "; ?> 			   
			   	<?php endforeach; ?>
				</td>

				<!-- Numero Páginas -->
				<td><?=$libro->npalabras ?></td>

				<!-- Sinopsis -->
				<td>
					<div class="expandable">
					<?=$libro->sinopsis ?>
					</div>
				</td>				
				
				<!-- Edad Recomendada -->				
				<td><?=$libro->edadminima ?></td>
				
				<!-- Valoración -->
				<td>
				
				
					<!--<?php
						//$id_libro = $libro->id;
						/*$valoracion=R::findOne('valoracion','id=?',[$id_libro]);						  
						  echo " nota: ",$valoracion->id." contenido: ".$valoracion->contenido;*/					
						
						/*$valoracion = R::findCollection('valoracion', 'ORDER BY nota ASC ');
						while ($valoraciones = $valoracion->next()) {
							$idvlibro = $valoraciones->libro_id;*/							
							/* echo "longitud de valoraciones ".$longvaloracion; */
							/*if ($idvlibro == $id_libro) {								
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
					*/?>-->
					<?php 
						$suma=0;
						$cantidad=0;
					?>
					
					
					<?php foreach ($valoraciones as $valoracion):?>
					<!-- 
					ValoracionLibro
					<pre><?=print_r($valoracion->libro->id, true)?></pre>
					LibroID
					<pre><?=print_r($libro->id)?></pre>
					ValoracionNota
					<pre><?=print_r($valoracion->nota)?></pre>
					 -->
					
						<?php if(($valoracion->libro->id == $libro->id) && $valoracion->nota){
							$suma += $valoracion->nota;
							$cantidad++;							
						}
						?>
						
						
					<?php endforeach;?>
					
					<?php if($cantidad!=0):?>
					
						<?= $suma/$cantidad?>
					
					<?php endif;?>
				 
			 	</td>
			 	
			 	<!-- Modificar -->			 	
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
