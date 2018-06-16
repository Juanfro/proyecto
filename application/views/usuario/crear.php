<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>usuario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idusuario"> Usuario</label>
			</legend>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre"></input><br>
			<br>

			<label for="apellido">Apellido</label>
			<input type="text" name="apellido" id="apellido"></input><br>
			<br>

			<label for="alias">Alias</label>
			<input type="text" name="alias" id="alias" required="required"></input><br>
			<br>

			<label for="contrasena">Contraseña</label>
			<input type="password" name="contrasena" id="contrasena" required="required"></input><br>
			<br>

			<?php if(isset($_SESSION['usuario']['rol']) && $_SESSION['usuario']['rol']=='administrador'):?>
			<label for="rol">Rol</label>
			<!-- <input type="text" name="rol" id="rol" required="required"></input> -->
			<select name="rol" id="rol">
				<option value="usuario">Usuario</option>
				<option value="editor">editor</option>
				<option value="administrador">Administrador</option>				
			</select>
			<br>
			<br>
			<?php endif;?>

			<label for="email">Email</label>
			<input type="email" name="email" id="email" required="required"></input><br>
			<br>

			<label for="edad">Edad</label>
			<input type="text" name="edad" id="edad" onkeyup="validarEdad()"></input><br>
			<div id="pasaEdad"></div>
			
			<br> <button type="submit" id="botonEnviar" value="registrar usuario">Registrar Usuario</button>
		</fieldset>
	</form>

</div>
