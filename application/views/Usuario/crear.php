<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>usuario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idusuario"> Usuario</label>
			</legend>
			<label for="nombre">Nombre</label> <input type="text" name="nombre"
				id="nombre"></input><br><br>
				
		    <label for="apellido">Apellido</label> <input type="text" name="apellido"
				id="apellido"></input><br><br>
				
			<label for="alias">Alias</label> <input type="text" name="alias"
				id="alias" required="required"></input><br><br>
			
			<label for="contrasena">Contraseña</label> <input type="text" name="contrasena"
				id="contrasena" required="required"></input><br><br>
				
			<label for="rol">Rol</label> <input type="text" name="rol"
				id="rol" required="required"></input><br><br><!-- La etiqueta required Sólo debe aparecer en la vista del administrador -->
				
			<label for="email">Email</label> <input type="text" name="email"
				id="email" required="required"></input><br><br>
			
			<label for="edad">Edad</label> <input type="text" name="edad"
				id="edad"></input><br><br>			
			
			<input type="submit" value="registrar usuario">
		</fieldset>
	</form>
	
</div>
