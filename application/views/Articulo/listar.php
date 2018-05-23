<div class="container">


 	<table class="table table-bordered sortable">
 	<thead>
	   <tr><th>Titulo</th><th>Contenido</th><th>autor</th><th>Modificar</th><th>Borrar</th></tr>
	 </thead>
	 <tbody>
		<?php foreach ($articulos as $articulo): ?>
			<tr>
			 <td><?=$articulo->titulo ?></td>
			 <td><?=$articulo->contenido ?></td>
			 <td><?=$articulo->usuarioautor_id ?></td>
			<td>
			<form action="<?=base_url()?>Articulo/modificar" method ="post">
			 <input type="hidden" name="id_articulo" " value="<?=$articulo->id?>"/>
			 
			 <button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 </td> 
			 <td>
			 <form action="<?=base_url()?>Articulo/borrar" method ="post">
			 <input type="hidden" name="id_articulo" value="<?=$articulo->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			
			 </tr>
			 
         <?php endforeach; ?>
         </tbody>  
	</table>

	</div>

