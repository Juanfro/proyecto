<div class="container">

	<form action="<?=base_url()?>Autores/listarfiltro" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>
 <table class="table table-bordered">
	   <tr><th>nombre</th><th>Pseudonimo</th></tr>
		<?php foreach ($autores as $autor): ?>
			<tr>
			 <td><?=$autor->nombre ?></td>
			 <form action="<?=base_url()?>Autores/editar" method ="post">
			 <input type="hidden" name="idautores" value="<?=$autor->id?>"/>
			 <input type="hidden" name="filtro" value="<?=$filtro ?>" />
			 <td><button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 
			 <form action="<?=base_url()?>Autores/borrar" method ="post">
			 <input type="hidden" name="idautores" value="<?=$autor->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			 </tr>
			 
         <?php endforeach; ?>
		 </table>

	</div>