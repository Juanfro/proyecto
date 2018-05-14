<div class="container">

<form action="<?=base_url()?>Pais/listarPost" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>

 	<table class="table table-bordered">
	   <tr><th>nombre</th></tr>
		<?php foreach ($paises as $pais): ?>
			<tr>
			 <td><?=$pais->nombre ?></td>
			
			 </tr>
			 
         <?php endforeach; ?>
	</table>

	</div>
