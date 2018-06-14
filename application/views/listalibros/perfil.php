<div class="container">
	<div class="header col-md-12">
		<div class="col-md-12">
			<div class="col-md-6">
				<img class="imagen" src="<?= base_url()?>assets/img/listalibros.jpg" alt="koala">
			</div>
			<div class="col-md-4" id="informacion">
				<label for="lista">Nombre Lista : </label>
				<br> <span><?= $lista->nombre?></span><br>
				<br>

				<label for="libros">Libros :</label>
				<br> <?php foreach($lista->sharedLibroList as $libro):?>
								<?= $libro->titulo . "</br>";?>
							<?php endforeach;?>
									
				<br>
			</div>
		</div>
		 <div class=" biografia col-sm-10 col-md-12">
			<label for="biografia">Descripción</label><br><br>
	               <div class="expandable">
	                <p id="biografia" class="letra"><?= $lista->descripcion ?></p><br><br>
	                </div>
	     </div>	           	
     </div>
</div>