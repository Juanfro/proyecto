<nav class="container-fluid navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?=base_url()?>">Proyecto Libros</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			 
			<!-- Libros --> 
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Libros<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<?php if(isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' | $_SESSION['usuario']['rol']== 'editor' ) ) :?>
							<a href="<?=base_url()?>libro/crear">Nuevo</a>
						<?php endif;?>
							<a href="<?=base_url()?>libro/listar">Listar</a>
						
					</li>
				</ul>
			</li>
			
			<!---------------------------------------------------------->
			
			<!-- Autores -->			
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Autores<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<?php if(isset($_SESSION['usuario']) && ($_SESSION['usuario']['rol'] == 'administrador' | $_SESSION['usuario']['rol']== 'editor' ) ) :?>
							<a href="<?=base_url()?>autor/crear">Nuevo</a>
						<?php endif;?>
						<a href="<?=base_url()?>autor/listar">Listar</a>
					</li>
				</ul>
			</li>			
			
			<!---------------------------------------------------------->
			
			<!-- Listas --> 
					
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Listas Autores<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?=base_url()?>listaAutores/crear">Nuevo</a>
						<a href="<?=base_url()?>listaAutores/listar">Listar</a>
					</li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Listas Libros<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?=base_url()?>listalibros/crear">Nuevo</a>
						<a href="<?=base_url()?>listaLibros/listar">Listar</a>
					</li>
				</ul>
			</li>
						
						
			<!---------------------------------------------------------->
			
			<!-- Blogs -->
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Blogs<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>						
						<a href="<?=base_url()?>blog/listar">Listar</a>
					</li>
				</ul>
			</li>
			
			<!---------------------------------------------------------->
			<li class="dropdown">
				<a class="dropdown-toggle" href="<?=base_url()?>Home/vista">Home</a>				
			</li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right"> <!-- Hay que mandarle de alguna forma la informacion sobre si el usuario ha hecho login  -->
			<!--  <li><a>DEBUG NombreUsuario: <?= $_SESSION['usuario']['nombre']//DEBUG ?></a></li>
			<li><a>DEBUG RolUsuario: <?= $_SESSION['usuario']['rol'] ?></a></li>
			<li><a>DEBUG IdUsuario: <?= $_SESSION['usuario']['id'] ?></a></li>-->
				
				
			<?php if(isset($_SESSION['usuario'])):?>
				<!-- Mi Perfil -->
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $_SESSION['usuario']['nombre'];?><span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>					  
							<a href="<?=base_url()?>Usuario/perfil/<?=$_SESSION['usuario']['id']?>">Ir a mi perfil</a>
							<a href="<?=base_url()?>Usuario/cerrarsesion">Cerrar Sesión</a>
						
						</li>
					</ul>
				</li>
			<?php else:?>
				<!-- Registrarse -->
				<li><a href="<?=base_url()?>Usuario/crear">Registrarse</a></li><!-- Popup? Nueva pagina? -->
				
				<!-- LOGIN -->
				<li class="dropdown">
	    			<a class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
	    			<ul class="dropdown-menu">
	    				<li>
	    					<form action="<?=base_url()?>usuario/loginPost"  method="post"><!-- Recarga la pagina? Recarga la seccion? -->
	    						<input type="text"  name="nombre" id="nombre" placeholder="nombre/usuario">
	    						<input type="password"  name ="pwd" id="contrasena" placeholder="contraseña">
	    						<input type="submit" value="Entrar">
	    					</form>
	    				</li>
	    			</ul>    						
				</li>
			<?php endif;?>
				
				
			
		</ul>
	</div>
	
	
	
	
</nav>
