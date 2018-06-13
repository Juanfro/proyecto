<div class="container">
	<div class="header col-md-12">
		 <div class="col-md-12">
			  <div class="col-md-6" > 
			       <img  class="imagen" src="<?= base_url()?>assets/img/autor.jpg"  alt="koala">
			   </div>
			   <div class="col-md-4" id="informacion">
			       <label for="nombre">Nombre : </label> <br>
						<span><?= $autor->nombre?></span><br><br>
							<label for="pseudonimo">Pseudonimo :</label><br> 
							<span><?= $autor->pseudonimo?></span>
							<br><br>
							
							<label for="anodenacimiento">Año de Nacimiento :</label><br>
							 <span><?= $autor->anodenacimiento?></span><br><br>
							  
			</div>
			        
	  </div>
	  <div class="cuerpo col-md-5">
		<div class="col-md-6"  >
			<div class="row" >
			    <label for="biografia">Biografia</label><br><br>
			         <div class="expandable">
			             <p id="biografia" class="letra"><?= $autor->biografia ?></p><br><br>
			          </div>
			 </div>
			            
		</div>
	</div>        
</div>



