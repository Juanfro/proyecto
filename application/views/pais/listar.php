<div class="container">

<form action="<?=base_url()?>Pais/listarPost" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>

 	<table class="table table-bordered">
 	<thead>
	   <tr><th>nombre</th></tr>
	</thead>
	<tbody>
		<?php foreach ($paises as $pais): ?>
			<tr class="jcorgFilterTextParent">
			 <td class="jcorgFilterTextChild"><?=$pais->nombre ?></td>
			
			 </tr>
			 
         <?php endforeach; ?>
    </tbody>     
	</table>

	</div>
