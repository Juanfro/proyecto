<div class="container">

<form action="<?=base_url()?>Genero/listarfiltro" method ="post">
<label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>
 	<table class="table table-bordered">
	   <tr><th>nombre</th></tr>
		<?php foreach ($generos as $genero): ?>
			<tr>
			 <td><?=$genero->nombre ?></td>
			
			 </tr>
			 
         <?php endforeach; ?>
	</table>

	</div>
