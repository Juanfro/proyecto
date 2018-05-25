<div class="container">
 <div class="header col-md-12">
        <div class="col-md-12">
                
            <div class="col-md-3" > 
                <img  class="imagen" src="<?= base_url()?>assets/img/Koala.jpg"  alt="koala">
            </div>
            <div class="col-md-3" id="informacion">
              <label for="isbn">isbn : </label> <br>
				
				<span><?= $libro->isbn?></span><br><br>
				
				<label for="titulo">titulo :</label><br> <span><?= $libro->titulo?></span>
				<br><br>
				
				  
             </div>
        
        </div>
    </div>
    <div class="cuerpo col-md-12">
        <div class="col-md-6"  >
            
            <div class="row" >
               <label for="Sinapsis">Sinapsis</label><br><br> <p id="biografia"
				><?= $libro->sinopsis ?></p><br><br>
            </div>
            
        </div>
</div>        
        
