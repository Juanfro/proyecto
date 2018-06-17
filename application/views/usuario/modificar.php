<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>usuario/modificarPost" method="post">
		<fieldset>
			<legend>
				<label  class="control-label col-sm-2" for="idusuario"> Usuario</label>
			</legend>
			<div class="form-group">
				<label class="control-label col-sm-2"  for="nombre">Nombre</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="nombre" id="nombre" value="<?=$usuario->nombre ?>"></input><br>
				</div>
			</div>	
			<div class="form-group">
				<label  class="control-label col-sm-2" for="apellido">Apellido</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="apellido" id="apellido" value="<?=$usuario->apellido ?>"></input><br>
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="alias">Alias</label>
				<div class="col-sm-4">
					<input class="form-control"  type="text" name="alias" id="alias" required="required" value="<?=$usuario->alias ?>"></input><br>
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="contrasena">Contraseña</label>
				<div class="col-sm-4">
					<input  class="form-control" type="password" name="contrasena" id="contrasena" required="required" value=""></input><br>
				</div>
			</div>	
			<div class="form-group">
				<?php if($_SESSION['usuario']['rol']=='administrador'):?>
					<label  class="control-label col-sm-2 for="rol">Rol</label>
			<!-- <input type="text" name="rol" id="rol" required="required"></input> -->
					<div class="col-sm-4">
						<select  class="form-control col-sm-4" name="rol" id="rol">
							<option value="usuario">usuario</option>
							<option value="editor">editor</option>
							<option value="administrador">administrador</option>				
						</select>
					</div>
			
			<?php else:?>
			<input type="hidden" name="rol" id="rol" value="<?= $usuario->rol?>">
			
			<?php endif;?>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Email</label>
				<div class="col-sm-4">
					<input class="form-control"  type="text" name="email" id="email"  value="<?=$usuario->email ?>"required="required"></input><br>
				</div>
			</div>	
			<div class="form-group">
				<label class="control-label col-sm-2" for="edad">Edad</label>
				<div class="col-sm-4">
					<input  class="form-control" type="text" name="edad" id="edad" value="<?=$usuario->edad ?>"></input><br>
				</div>
			</div>	
			<input type="hidden" name="id_usuario" value="<?= $usuario ->id?>">
			 <input class="btn" type="submit" value="modificar usuario">
		</fieldset>
	</form>

</div>
