<nav class="container-fluid navbar navbar-inverse">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?=base_url()?>">Proyecto Libros</a>
	</div>
	<div class="collapse navbar-collapse" id="myNavbar">
		<ul class="nav navbar-nav">
			
			<!-- 
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones<span class="caret"></span></a>

				<ul class="dropdown-menu">
					<li class="dropdown-header">CIUDAD</li>
					<li><a href="<?=base_url()?>ciudad/crear">Nueva</a></li>
					<li><a href="<?=base_url()?>ciudad/listar">Listar</a></li>

					<li role="separator" class="divider"></li>

					<li class="dropdown-header">Leng.prog.</li>
					<li><a href="<?=base_url()?>lp/crear">Nuevo</a></li>
					<li><a href="<?=base_url()?>lp/listar">Listar</a></li>
					
					<li role="separator" class="divider"></li>
					
					<li class="dropdown-header">Empleado</li>
					<li><a href="<?php base_url()?>empleado/crear">Nuevo</a></li>
					<li><a href="<?php base_url()?>empleado/listar">Listar</a></li> 


				</ul>
				
			</li>
			
			 -->
			 
			<!-- Libros --> 
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Libros<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?=base_url()?>libro/crear">Nuevo</a>
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
						<a href="<?=base_url()?>autor/crear">Nuevo</a>
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
			
			<!-- Mi Perfil -->
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi perfil<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li>
					  
						<a href="<?=base_url()?>Usuario/perfil">Ir a mi perfil</a>						
					</li>
				</ul>
			</li>
			
			<!-- LOGIN -->
			<li class="dropdown">
				<a class="dropdown-toggle" href="<?=base_url()?>Home/vista">Home</span></a>
				
			</li>
			
			<li>
				
			</li>

		</ul>
		
		<ul class="nav navbar-nav navbar-right"> <!-- Hay que mandarle de alguna forma la informacion sobre si el usuario ha hecho login  -->
			<li><a>DEBUG NombreUsuario: <?= $_SESSION['usuario']['nombre']//DEBUG ?></a></li>
			<li><a>DEBUG RolUsuario: <?= $_SESSION['usuario']['rol'] ?></a></li>
			<li><a>DEBUG IdUsuario: <?= $_SESSION['usuario']['id'] ?></a></li>			
			
			<li><a href="<?=base_url()?>Usuario/crear">Registrarse</a></li><!-- Popup? Nueva pagina? -->
			
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
		</ul>
	</div>
	
	
	
	
</nav>
