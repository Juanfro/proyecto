
<div class="container">


<table class="table table-bordered" id="myTable">
<tr><th>Nota</th><th>Contenido</th><th>Modificar</th><th>Borrar</th><th>Vista</th></tr>
<?php foreach ($valoracion as $valoraciones): ?>
			<tr>
			 <td><?=$valoraciones->nota ?></td>
			 <td><?=$valoraciones->contenido ?></td>
			<td>
			
			<form action="<?=base_url()?>Valoracion/modificar" method ="post">
			 <input type="hidden" name="id_valoracion"  value="<?=$valoraciones->id?>"/>
			 
			 <button class="glyphicon glyphicon-edit" type="submit"></button>
			 </form>
			 </td> 
			 <td>
			 <form action="<?=base_url()?>Valoracion/borrar" method ="post">
			 <input type="hidden" name="id_valoracion" value="<?=$valoraciones->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			<td>
			<form action="<?=base_url()?>Valoracion/vista" method ="post">
			 <input type="hidden" name="id_valoracion" value="<?=$valoraciones->id?>"/>
			 <button class="glyphicon glyphicon-equalizer" type="submit"></button>
			 </form>
			</td>
			
			 </tr>
			 
         <?php endforeach; ?>
	</table>

	</div>