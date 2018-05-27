<div class="container">
	<!-- FILTRO -->
	
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
					
					</td>
					
					<td>
					
					</td>
					
					<td>
					
					</td>
					
					<td>
					
					</td>
					
					<td>
					
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
	
</div>