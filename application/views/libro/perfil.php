<div class="container">
	<div class="libro col-md-12 ">
		
			<div class=" col-sm-6 col-md-6">
				<img class="imagen" src="<?= base_url()?>assets/img/libro.jpg" alt="koala">
			 </div>
			 <div class=" col-sm-4 col-md-4" id="informacion">
				<label for="isbn">isbn : </label><br> 
					<span><?= $libro->isbn?></span><br><br>
			
				<label for="titulo">titulo :</label><br> 
				 	<span><?= $libro->titulo?></span><br><br>
				 	
				 <label for="Autores">Autores :</label><br> 
				 <?php foreach ($libro->sharedAutorList as $autor): ?>
						<?= "<span>". $autor->nombre ."</span></br> "; ?> 
					<?php endforeach; ?>
				 	
			  </div>
			   
				<?php if(isset($_SESSION['usuario'])):?>
					<div class="col-md-4 valorar">
						<form action="<?= base_url()?>valoracion/crear" method="post">
							<input type="hidden" name="id_libro" id="id_libro" value="<?= $libro->id?>" />
							
							<label for="valorar">Valorar Libro</label>
							<button class="glyphicon glyphicon-star-empty" id="valorar" type="submit"></button>
						</form> 
				 	</div>
			 	<?php endif;?>
				
		 
	
			<div class="sinopsis  col-sm-12 col-md-12">
				<label for="Sinopsis">Sinopsis</label>
					<div class="expandable">
						<p id="biografia" class="letra"><?= $libro->sinopsis ?></p><br><br>
					 </div>
			 </div>   			    
				<div class=" valoracion  col-sm-12 col-md-12 ">
					<label for="Valoracion">Valoraciones</label><br>
						<?php 
							$id_libro=$libro->id;
									   /*$valoracion=R::findOne('valoracion','id=?',[$id_libro]);
									   echo " nota: ",$valoracion->id." contenido: ".$valoracion->contenido;*/
									   
							$valoracion=R::findCollection('valoracion','ORDER BY nota DESC ');
							while ($valoraciones = $valoracion->next()) {
								$idvlibro=$valoraciones->libro_id;
									   /*echo "longitud de valoraciones ".$longvaloracion;*/
									if ($idvlibro == $id_libro){
									   	$nota=$valoraciones->nota;
									   	echo "nota ".$nota." contenido ".$valoraciones->contenido;   
									   }
							 }
							?>
				 </div>
			
		</div>
		
