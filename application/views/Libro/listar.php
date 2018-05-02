<div class="container">

	<form action="<?=base_url()?>Libro/listarfiltro" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value='<?=$filtro?>'>
 <input type="submit" value="filtrar">	
 </form>
 <table class="table table-bordered">
	   <tr><th>ISBN</th><th>autor</th><th>Idioma</th><th> nº palabras</th><th>Sinopsis</th>
	     <th>Edicion</th><th>Edad Minima</th><th>Editar</th><th>Borrar</th> </tr>
	  
		<?php foreach ($libros as $libro): ?>
			<tr>
			 <td><?=$libro->isbn ?></td>
			 <td><?=$libro->autor ?></td>
			 <td><?=$libro->idioma ?></td>
			 <td><?=$libro->npalabras ?></td>
			 <td><?=$libro->sinopsis ?></td>
			 <td><?=$libro->edicion ?></td>
			 <td><?=$libro->edadminima ?></td>
			 <td>
			 <form action="<?=base_url()?>Libro/modificar" method ="post">
			 <input type="hidden" name="id_libros" value="<?=$libro->id?>"/>
			 <input type="hidden" name="filtro" value="<?=$filtro ?>" />
			 <button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 </td>
			 <td>
			 <form action="<?=base_url()?>Libro/borrar" method ="post">
			 <input type="hidden" name="id_libros" value="<?=$libro->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			 </tr>
			 
         <?php endforeach; ?>
		 </table>

	</div>
