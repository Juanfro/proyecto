
<div class="container">


<table class="table table-bordered">
<tr><th>Contenido</th><th>Modificar</th><th>Borrar</th></tr>
<?php foreach ($comentario as $comentarios): ?>
			<tr>
			
			 <td><?=$comentarios->contenido ?></td>
			<td>
			
			<form action="<?=base_url()?>Comentario/modificar" method ="post">
			 <input type="hidden" name="id_comentario"  value="<?=$comentarios->id?>"/>
			 
			 <button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 </td> 
			 <td>
			 <form action="<?=base_url()?>Comentario/borrar" method ="post">
			 <input type="hidden" name="id_comentario" value="<?=$comentarios->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			
			 </tr>
			 
         <?php endforeach; ?>
	</table>

	</div>