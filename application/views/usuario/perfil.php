<div class="container">
 	<div class="header col-md-12">
        <div class=" usuario col-md-12">
             <div class="col-md-6" > 
                <img  class="imagen" src="<?= base_url()?>assets/img/foto_usuario.png"  alt="koala">
             </div>
             <div class="col-md-4" id="informacion">
              	<label for="nombre">nombre : </label> <br>
					<span><?= $usuario->nombre?></span><br><br>
				<label for="apellido">apellido :</label><br>
				 	<span><?= $usuario->apellido?></span><br><br>
				
				<label for="alias">alias :</label><br>
				 <span><?= $usuario->alias?></span>
				
             </div>
        </div>
    </div>
</div>
