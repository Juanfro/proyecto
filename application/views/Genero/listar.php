<div class="container">

<form action="<?=base_url()?>Genero/listarPost" method ="post">
<label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>
 	<table class="table table-bordered ">
 	<thead>
	   <tr><th>nombre</th></tr>
	   </thead>
	   <tbody>
		<?php foreach ($generos as $genero): ?>
			<tr>
			 <td><?=$genero->nombre ?></td>
			
			 </tr>
			 
         <?php endforeach; ?>
         </tbody>
	</table>

	</div>
