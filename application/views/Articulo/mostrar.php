<div class="container">
	<section class="articulo">
		<article class="col-md-12">
			<h1><?= $articulo->titulo?></h1>
			<div class="content">
				<?=$articulo->contenido?>
			</div>
		</article>
	</section>
	
	<?php if(isset($_SESSION['usuario'])):?>
		<section class="comentarios">
			<div class="container escribir-comentario">
				<form action="<?=base_url()?>comentario/crearPost" method="post">	
					<input type="hidden" name="id_articulo" value="<?= $articulo->id?>"/>					
					<label for="contenido">Escribe un comentario</label>
					<?php if(isset($_SESSION['usuario'])):?>
						<div>DEBUG ID Usuario: <?=$_SESSION['usuario']['id']?></div>
					<?php else:?>
						<div>DEBuG ID Usuario: NO ID</div>
					<?php endif;?>
					<textarea name="contenido" id="contenido" ></textarea>	
					<br>												
					<input type="submit" value="Enviar Comentario">				
				</form>
			</div>
		</section>
	<?php endif;?>
	
	<section class="comentarios">
	<?php 
				   $id_comentario=$articulo->id;
				  
				   $comentario=R::findCollection('comentario','ORDER BY fecha DESC ');
				   while ($comentarios = $comentario->next()) {
				    $idvcomentario=$comentarios->articulo_id;
				  /*echo "longitud de valoraciones ".$longvaloracion;*/
				   	if ($idvcomentario == $id_comentario){
				   		$contenido=$comentarios->contenido;
				   	echo "contenido ".$contenido."<br>";
				   	   
				   }
				 
				   }
				 ?>
				
	
	</section>
	
	
	
</div>