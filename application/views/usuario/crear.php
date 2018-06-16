<div class="container">
	<form class="form form-horizontal" id="idForm" action="<?=base_url()?>usuario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idusuario"> Usuario</label>
			</legend>
			
			<div class="form-group">
				<label class="control-label" for="nombre">Nombre</label>
				<input class="form-control" type="text" name="nombre" id="nombre"></input><br>
				
	
				<label class="control-label" for="apellido">Apellido</label>
				<input class="form-control" type="text" name="apellido" id="apellido"></input><br>
				
				
				<label class="control-label" for="alias">Alias</label>
				<input class="form-control" type="text" name="alias" id="alias" required="required"></input><br>
				
	
				<label class="control-label" for="contrasena">Contraseña</label>
				<input class="form-control" type="password" name="contrasena" id="contrasena" required="required"></input><br>
				
				
				<?php if(isset($_SESSION['usuario']['rol']) && $_SESSION['usuario']['rol']=='administrador'):?>
					<label class="control-label" for="rol">Rol</label>
					<!-- <input type="text" name="rol" id="rol" required="required"></input> -->
					<select name="rol" id="rol">
						<option value="usuario">Usuario</option>
						<option value="editor">editor</option>
						<option value="administrador">Administrador</option>				
					</select>
					
				<?php endif;?>
				
				<label class="control-label" for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" required="required"></input><br>
				
	
				<label class="control-label" for="edad">Edad</label>
				<input class="form-control" type="text" name="edad" id="edad" onkeyup="validarEdad()"></input><br>
				<div id="pasaEdad"></div>
				
				<button type="submit" id="botonEnviar" value="registrar usuario">Registrar Usuario</button>				
			</div>
		</fieldset>
	</form>

</div>
