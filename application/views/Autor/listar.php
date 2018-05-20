<div class="container">

	<form action="<?=base_url()?>Autor/listarfiltro" method="post">
		<label for='idfiltro'>filtro</label>
		<input id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'> <input type="submit"
			value="filtrar">
	</form>
	<table class="table table-bordered">
		<tr>
			<th>nombre</th>
			<th>Pseudonimo</th>
			<th>Modificar</th>
			<th>Eliminar</th>
			<th>Listar</th>
		</tr>
		<?php foreach ($autores as $autor): ?>
			<tr>
			<td><?=$autor->nombre ?></td>
			<td><?=$autor->pseudonimo ?></td>
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
		</tr>
			 
         <?php endforeach; ?>
		 </table>

</div>