<div class="container">
	<div class="header col-md-12">
		<div class="col-md-12">
			<div class="col-md-6">
				<img class="imagen" src="<?= base_url()?>assets/img/Koala.jpg" alt="koala">
			</div>
			<div class="col-md-4" id="informacion">
				<label for="lista">Nombre Lista : </label>
				<br> <span><?= $lista->nombre?></span><br>
				<br>

				<label for="autores">Autores :</label>
				<br> <span><?= $lista->autores?></span> <br>
				
				<?php foreach($lista->sharedAutorList as $autor): ?>
				<?= $autor->nombre ."</br> "; ?> 
				<?php endforeach; ?>
									
				<br>
			</div>
			<div class=" biografia col-sm-10 col-md-12">	
				<label for="biografia">Descripción:</label>
				<div class="expandable">
                <p id="biografia" class="letra"><?= $lista->descripcion ?></p><br><br>
                </div>
			</div>
		</div>	
	
</div>