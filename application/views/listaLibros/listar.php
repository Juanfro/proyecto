<div class="container">
	<!-- FILTRO -->
	<input type="text" id="myInput" onkeyup="myFunction()" 
	placeholder="Nombre lista" title="Nombre lista">
	
	<!-- End FILTRO -->
	
	<form action="<?= base_url()?>ListaLibros/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
		
	<table class="table table-bordered" id="myTable">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Libros</th>
				<th>Autor</th>		
				
				<!-- Modificar -->
				<th></th>
				<!-- Borrar -->
				<th></th>
				
				<?php if(isset($_SESSION['usuario']) ):?>
					<th>Seguir</th>
				<?php endif;?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($listas as $lista) :?>
				<tr>
					<!-- Nombre -->
					<td>
						<a href="<?= base_url()?>ListaLibros/perfil/<?=$lista->id?>" >
							<?= $lista->nombre?>
						</a>
					</td>
					
					<!-- Libros -->
					<td>
						<?php foreach($lista->sharedLibroList as $libro):?>
							<?= $libro->titulo . "</br>";?>
						<?php endforeach;?>
					</td>
					
					<!-- Autor -->
					<td>
						<?= ($lista->usuario->alias)?>
					</td>
					
					<!-- Modificar -->
					<td>
						<?php if(
							(isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol']== 'administrador' || $_SESSION['usuario']['rol']== 'editor' ) ) || 
							(isset($_SESSION['usuario']) && ($lista->usuario->alias==$_SESSION['usuario']['nombre']) )
							) : ?>

							<form action="<?=base_url()?>ListaLibros/modificar" method="post">
								<input type="hidden" name="id_lista" id="id_lista" value="<?=$lista->id?>" />
								<input type="hidden" name="filtro" value="<?=$filtro ?>" />
								<button class=" glyphicon glyphicon-edit" type="submit"></button>
							</form>
						<?php endif;?>
					</td>
					
					<!-- Borrar -->
					<td>
						<?php if(
								(isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol']== 'administrador' || $_SESSION['usuario']['rol']== 'editor' ) ) || 
								(isset($_SESSION['usuario']) && ($lista->usuario->alias==$_SESSION['usuario']['nombre']) )
							) : ?>
							<form action="<?=base_url()?>ListaLibros/borrar" method="post">
								<input type="hidden" name="id_lista"  id="id_lista" value="<?=$lista->id?>" />
								<button class="glyphicon glyphicon-remove" type="submit"></button>
							</form>
						<?php endif;?>
					</td>
					
					<!-- Seguir -->
					<?php if(isset($_SESSION['usuario']) ):?>
						<td>
							<form action="<?= base_url()?>ListaLibros/seguir" method="post">
								<input type="hidden" name="id_lista" id="id_lista" value="<?= $lista->id?>"/>
								<button class="glyphicon glyphicon-heart" type="submit"></button>
							</form>
						</td>
					<?php endif;?>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	<form action="<?= base_url()?>ListaLibros/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>
</div>