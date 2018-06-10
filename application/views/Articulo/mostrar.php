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
					<textarea name="contenido" rows="5" cols="150"></textarea>	
					<br>												
					<input type="submit" value="Enviar Comentario">				
				</form>
			</div>
		</section>
	<?php endif;?>
	
	
	
</div>