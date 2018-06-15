<div class="container">
 	<div class="header col-md-12">
        <div class=" usuario col-md-12">
             <div class="col-md-6" > 
                <img  class="imagen" src="<?= base_url()?>assets/img/foto_usuario.png"  alt="koala">
             </div>
             <div class="col-md-4" id="informacion">
              	<label for="nombre">Nombre : </label> <br>
					<span><?= $usuario->nombre?></span><br><br>
				<label for="apellido">Apellido :</label><br>
				 	<span><?= $usuario->apellido?></span><br><br>
				
				<label for="alias">Alias :</label><br>
				 <span><?= $usuario->alias?></span>
				 
				 <div  class="modificar col-md-4">
				  	
			     	
						<a href=" <?=base_url()?>Usuario/modificar/<?=$_SESSION['usuario']['id']?>"><i class="icon-address-card"></i></a>
			   
				
				</div>
             </div>
             
        </div>
    </div>
</div>
