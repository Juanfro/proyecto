<div class="container">
	<!-- FILTRO -->
	<form action="<?=base_url()?>ListaAutores/listar" method="post">
		<label for='idfiltro'>filtro</label>
		<input id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'> 
		
	</form>
	<br/>
	<!-- End FILTRO -->
	<form action="<?= base_url()?>ListaAutores/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
	<br/>
	<table class=" table table-bordered sortable">
		<thead>
			<tr class="jcorgFilterTextParent">
				<th>Nombre</th>
				<th>Autores</th>
				<th>Autor de la lista</th>
				<th>Editar</th>
				<th>Borrar</th>
				
				<?php if(isset($_SESSION['usuario']) ):?>
					<th>Seguir</th>
				<?php endif;?>				
								
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listas as $lista):?>
				<tr>
					<!-- Nombre -->
					<td><a href="<?= base_url()?>ListaAutores/perfil/<?=$lista->id ?>" class="jcorgFilterTextChild">
								<?= $lista->nombre?>
							</a></td>
	
					<!-- Autores -->
					<td>
						<?php foreach($lista->sharedAutorList as $autor): ?>
						 <?= $autor->nombre ."</br> "; ?> 
						<?php endforeach; ?>
						</td>
	
					<!-- Creador de la Lista -->
					<td>
							<?= $lista->usuario->alias?>
						</td>
	
					<!-- Modificar -->
					<td>
						<form action="<?=base_url()?>ListaAutores/modificar" method="post">
							<input type="hidden" name="id_lista" id="id_lista" value="<?=$lista->id?>" /> <input
								type="hidden" name="filtro" value="<?=$filtro ?>" />
							<button class=" glyphicon glyphicon-edit" type="submit"></button>
						</form>
					</td>
	
					<!-- Borrar -->
					<td>
						<form action="<?=base_url()?>ListaAutores/borrar" method="post">
							<input type="hidden" name="id_lista" id="id_lista" value="<?=$lista->id?>" />
							<button class="glyphicon glyphicon-remove" type="submit"></button>
						</form>
					</td>
	
					
					<!-- Seguir -->
					<?php if(isset($_SESSION['usuario']) ):?>
						<td>
							<form action="<?= base_url()?>ListaAutores/seguir" method="post">
								<input type="hidden" name="id_lista" id="id_lista" value="<?= $lista->id?>" />
								<button class="glyphicon glyphicon-heart" type="submit"></button>
							</form>
						</td>
					<?php endif;?>
					
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<form action="<?= base_url()?>ListaAutores/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
	
</div>