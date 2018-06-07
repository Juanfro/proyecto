<div class="container">
 <div class="header col-md-12">
        <div class="col-md-12">
                
            <div class="col-md-3" > 
                <img  class="imagen" src="<?= base_url()?>assets/img/Koala.jpg"  alt="koala">
            </div>
            <div class="col-md-3" id="informacion">
              <label for="nombre">nombre : </label> <br>
				
				<span><?= $usuario->nombre?></span><br><br>
				
				<label for="apellido">apellido :</label><br>
				 <span><?= $usuario->apellido?></span>
				<br><br>
				
				<label for="alias">alias :</label><br>
				 <span><?= $usuario->alias?></span>
				<br><br>
				<label for="rol">rol :</label><br>
				 <span><?= $usuario->rol?></span>
				 
				<br><br>
				
				
				  
             </div>
        
        </div>
    </div>
    
</div>
