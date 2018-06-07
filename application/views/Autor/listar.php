<div class="container">

	<form action="<?=base_url()?>Autor/listarfiltro" method="post">
		<label for='idfiltro'>filtro</label>
		<input id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'> <input type="submit"
			value="filtrar">
	</form>
	<table class="table table-bordered sortable">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Pseudonimo</th>
			<th>Pais</th>
			<th>Modificar</th>
			<th>Eliminar</th>
			<th>Listar</th>
			<th>Perfil</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($autores as $autor): ?>
			<tr  class="jcorgFilterTextParent">
			<td >
			<a href="<?= base_url()?>Autor/perfil/<?=$autor->id ?>" class="jcorgFilterTextChild" > 
			<?=$autor->nombre ?>
			</a>
			</td>
			<td class="jcorgFilterTextChild"><?=$autor->pseudonimo ?></td>
			<td><?= $autor->pais->nombre ?></td>
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
			<td>
				<form action="<?= base_url()?>Autor/seguir" method="post">
					<input type="hidden" name="id_autor" id="id_autor" value="<?= $autor->id?>"/>
					<button class="glyphicon glyphicon-heart" type="submit"></button>
				</form>
			</td>
			<td>
				<form action="<?= base_url()?>Autor/perfil" method="post">
					<input type="hidden" name="id_autor" id="id_autor" value="<?= $autor->id?>"/>
					<button class="glyphicon glyphicon-user" type="submit"></button>
				</form>
			</td>
		</tr>
			 
         <?php endforeach; ?>
    </tbody>     
		 </table>

</div>