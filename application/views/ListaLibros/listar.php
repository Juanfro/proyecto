<div class="container">
	<!-- FILTRO -->
	<form action="" method="post">
		<label for='idfiltro'>Filtro</label>
		<input id='idfiltro' type="text" name='filtro' value=''> 
		
	</form>
	<!-- End FILTRO -->
	<form action="<?= base_url()?>ListaLibros/crear" method="post">
		<button class="glyphicon glyphicon-plus" type="submit"></button>
	</form>
	
	<table class="table table-bordered sortable">
		<thead>
			<tr  class="jcorgFilterTextParent">
				<th>Nombre</th>
				<th>Libros</th>
				<th>Editar</th>
				<th>Borrar</th>
				<th>Seguir</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listas as $lista) :?>
				<tr>
					<td>
						<a href="<?= base_url()?>ListaLibros/perfil/<?=$lista->id?>" class="jcorgFilterTextChild">
								<?= $lista->nombre?></a>
					</td>
						
					<td>
						<?php foreach($lista->sharedLibroList as $libro):?>
						<?= $libro->titulo . "</br>";?>
						<?php endforeach;?>
					</td>
						
					<td>
						<form action="<?=base_url()?>ListaLibros/modificar" method="post">
							<input type="hidden" name="id_lista" id="id_lista" value="<?=$lista->id?>" /> 
							<input type="hidden" name="filtro" value="<?=$filtro ?>" />
							<button class=" glyphicon glyphicon-edit" type="submit"></button>
						</form>
					</td>
						
					<td>
						<form action="<?=base_url()?>ListaLibros/borrar" method="post">
							<input type="hidden" name="id_lista"  id="id_lista" value="<?=$lista->id?>" />
							<button class="glyphicon glyphicon-remove" type="submit"></button>
						</form>	
					</td>
						
					<td>
						<form action="<?= base_url()?>ListaLibros/seguir" method="post">
							<input type="hidden" name="id_lista" id="id_lista" value="<?= $lista->id?>"/>
							<button class="glyphicon glyphicon-heart" type="submit"></button>
						</form>
					</td>								
			</tr>				
		<?php endforeach;?>				
		</tbody>
	</table>
<form action="<?= base_url()?>ListaLibros/crear" method="post">
		<button class="glyphicon glyphicon-plus" type="submit"></button>
	</form>	
</div>