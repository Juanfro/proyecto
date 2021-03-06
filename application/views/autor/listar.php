<div class="container">

	<input type="text" id="myInput" onkeyup="myFunction()" 
	placeholder="Nombre Autor" title="Type in a name">
	
	<br>
	<form action="<?= base_url()?>Autor/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>	
	<br>
	<table class="table table-bordered" id="myTable">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Pseudonimo</th>
			<th>Pais</th>		
			<?php if(isset ($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' || $_SESSION['usuario']['rol'] == 'editor')):?>
				<th>Modificar</th>
				<th>Eliminar</th>
			<?php endif;?>
			
			<?php if(isset($_SESSION['usuario'])):?>
				<th>Seguir</th>
			<?php endif;?>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($autores as $autor): ?>
			<tr>
				<td class="jcorgFilterTextParent">
					<a href="<?= base_url()?>Autor/perfil/<?=$autor->id ?>" class="jcorgFilterTextChild" > 
						<?=$autor->nombre ?>
					</a>
				</td>
				
				<td class="jcorgFilterTextChild"><?=$autor->pseudonimo ?></td>
				<td><?= $autor->pais->nombre ?></td>
				
				<?php if(isset ($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' || $_SESSION['usuario']['rol'] == 'editor')):?>
					<td>
						<form action="<?=base_url()?>Autor/modificar" method="post">
							<input type="hidden" name="id_autor" id="id_autor" value="<?=$autor->id?>" /> 
							<input type="hidden" name="filtro" value="<?=$filtro ?>" />
							<button class=" glyphicon glyphicon-edit" type="submit"></button>
						</form>
					</td>
					<td>
						<form action="<?=base_url()?>Autor/borrar" method="post">
							<input type="hidden" name="id_autor" value="<?=$autor->id?>" />
							<button class="glyphicon glyphicon-remove" type="submit"></button>
						</form>
					</td>
				<?php endif;?>
				
				<?php if(isset($_SESSION['usuario']) ): ?>
					<td>
						<form action="<?= base_url()?>Autor/seguir" method="post">
							<input type="hidden" name="id_autor" id="id_autor" value="<?= $autor->id?>"/>
							<button class="glyphicon glyphicon-heart" type="submit"></button>
						</form>
					</td>
				<?php endif;?>
				
			</tr>
			 
         <?php endforeach; ?>
    </tbody>     
 </table>
<form action="<?= base_url()?>Autor/crear" method="post">
		<button class="glyphicon glyphicon-plus pointer" type="submit"></button>
	</form>			 

</div>