<div class="container">


 	<table class="table table-bordered">
	   <tr><th>nombre</th></tr>
		<?php foreach ($paises as $pais): ?>
			<tr>
			 <td><?=$pais->nombre ?></td>
			
			 </tr>
			 
         <?php endforeach; ?>
	</table>

	</div>
