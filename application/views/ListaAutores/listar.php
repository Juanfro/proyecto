<div class="container">
	<!-- FILTRO -->
	<form action="<?=base_url()?>ListaAutores/listar" method="post">
		<label for='idfiltro'>filtro</label>
		<input id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'> <input type="submit"
			value="filtrar nombre_lista">
	</form>
	<!-- End FILTRO -->
	
	<table class=" table table-bordered sortable">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Autores</th>
				<th>Editar</th>
				<th>Borrar</th>
				<th>Seguir</th>
				<th>Ir a la lista</th>				
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listas as $lista):?>
				<tr>
					<td>
					<?= $lista->nombre?>
					</td>
					
					<td>
					<?php foreach($lista->sharedAutorList as $autor): ?>
					 <?= $autor->nombre ."</br> "; ?> 
					<?php endforeach; ?>
					</td>
					
					<td>
					  <form action="<?=base_url()?>ListaAutores/modificar" method="post">
						<input type="hidden" name="id_lista" id="id_lista" value="<?=$lista->id?>" /> 
						<input type="hidden" name="filtro" value="<?=$filtro ?>" />
						<button class=" glyphicon glyphicon-edit" type="submit"></button>
					  </form>
					</td>
					
					<td>
					  <form action="<?=base_url()?>ListaAutores/borrar" method="post">
						<input type="hidden" name="id_lista"  id="id_lista" value="<?=$lista->id?>" />
						<button class="glyphicon glyphicon-remove" type="submit"></button>
					  </form>
					</td>
					
					<td>
					  <form action="<?= base_url()?>ListaAutores/seguir" method="post">
						<input type="hidden" name="id_lista" id="id_lista" value="<?= $lista->id?>"/>
						<button class="glyphicon glyphicon-heart" type="submit"></button>
					  </form>
					</td>
					
					<td>
					
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
	
</div>