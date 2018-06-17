<div class="container">
	<form class="form-horizontal" id="idForm" action="<?=base_url()?>usuario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idusuario"> Usuario</label>
			</legend>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="nombre">Nombre</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="nombre" id="nombre"></input>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="apellido">Apellido</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="apellido" id="apellido"></input>
				</div>
			</div>	
			<div class="form-group">	
				<label class="control-label col-sm-2" for="alias">Alias</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="alias" id="alias" required="required"></input>
				</div>
			</div>	
	        <div class="form-group">
				<label class="control-label col-sm-2" for="contrasena">Contraseña</label>
				<div class="col-sm-4">
					<input class="form-control" type="password" name="contrasena" id="contrasena" required="required"></input>
				</div>
			</div>	
			<div class="form-group">
				<?php if(isset($_SESSION['usuario']['rol']) && $_SESSION['usuario']['rol']=='administrador'):?>
					<label class="control-label col-sm-2 " for="rol">Rol</label>
					<!-- <input type="text" name="rol" id="rol" required="required"></input> -->
						<div class="col-sm-4">
							<select  class="form-control col-sm-4" name="rol" id="rol">
								<option value="usuario">Usuario</option>
								<option value="editor">Editor</option>
								<option value="administrador">Administrador</option>				
							</select>
						</div>
				<?php endif;?>
			</div>
			 <div class="form-group">	
				<label class="control-label col-sm-2" for="email">Email</label>
				<div class="col-sm-4">
					<input class="form-control" type="email" name="email" id="email" required="required"></input><br>
				</div>
			</div>	
	   		<div class="form-group">
				<label class="control-label col-sm-2" for="edad">Edad</label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="edad" id="edad" onkeyup="validarEdad()"></input><br>
						<div id="pasaEdad"></div>
			    </div>
			</div>	    
				<button class="btn" type="submit" id="botonEnviar" value="registrar usuario">Registrar Usuario</button>				
			
		</fieldset>
	</form>

</div>
