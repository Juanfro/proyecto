<div class="container">

<form action="<?=base_url()?>usuario/listarPost" method ="post">
	  <label for='idfiltro'>filtro</label>
 <input  id='idfiltro' type="text" name='filtro' value=''>
 <input type="submit" value="filtrar usuario">	
 </form> 
 
 

 <table class=" table table-bordered sortable">
 	<thead>
	   <tr><th>Nombre</th><th>Apellido</th><th>Alias</th><th>Rol</th><th>Email</th>

	     <th>Edad</th><th>Editar</th><th>Borrar</th> </tr>
	  </thead>
	  <tbody>
		<?php foreach ($usuario as $usuarios): ?>
			<tr>
			 <td><?=$usuarios->nombre ?></td>
			 <td><?=$usuarios->apellido?></td>
			 <td><?=$usuarios->alias ?></td>
			 <td><?=$usuarios->rol ?></td>
			 <td><?=$usuarios->email ?></td>
			 <td><?=$usuarios->edad ?></td>
			 
			 <td>
			 <form action="<?=base_url()?>Usuario/modificar" method ="post">
			 <input type="hidden" name="id_usuario" value="<?=$usuarios->id?>"/>
			 <!-- envia el tipo de rol que tiene -->
			 <input type="hidden" name="id_rol" value="<?=$usuarios->rol?>"/>
			 <button class=" glyphicon glyphicon-edit" type="submit"/>
			 </form>
			 </td>
			 <td>
			 <form action="<?=base_url()?>Usuario/borrar" method ="post">
			 <input type="hidden" name="id_usuario" value="<?=$usuarios->id?>"/>
			 <button class="glyphicon glyphicon-remove" type="submit"></button>
			 </form>
			</td>
			 </tr>
		         <?php endforeach; ?>
         </tbody>
		 </table>

	</div>



