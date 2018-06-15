<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>usuario/modificarPost" method="post">
		<fieldset>
			<legend>
				<label for="idusuario"> Usuario</label>
			</legend>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre" value="<?=$usuario->nombre ?>"></input><br>
			<br>

			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido" value="<?=$usuario->apellido ?>"></input><br>
			<br>

			<label for="alias">Alias</label>
			<input type="text" name="alias" id="alias" required="required" value="<?=$usuario->alias ?>"></input><br>
			<br>

			<label for="contrasena">Contraseña</label>
			<input type="password" name="contrasena" id="contrasena" required="required" ></input><br>
			<br>

			<?php if($_SESSION['usuario']['rol']=='administrador'):?>
			<label for="rol">Rol</label>
			<!-- <input type="text" name="rol" id="rol" required="required"></input> -->
			<select name="rol" id="rol">
				<option value="usuario">Usuario</option>
				<option value="editor">editor</option>
				<option value="administrador">Administrador</option>				
			</select>
			<br>
			<br>
			<?php else:?>
			<input type="hidden" name="rol" id="rol" value="<?= $usuario->rol?>">
			
			<?php endif;?>
			

			<label for="email">Email</label>
			<input type="text" name="email" id="email"  value="<?=$usuario->email ?>"required="required"></input><br>
			<br>

			<label for="edad">Edad</label>
			<input type="text" name="edad" id="edad" value="<?=$usuario->edad ?>"></input><br>
			<br>
			<input type="hidden" name="id_usuario" value="<?= $usuario ->id?>">
			 <input type="submit" value="modificar usuario">
		</fieldset>
	</form>

</div>
