<div class="container">
	<section class="articulo">
		<article class="col-md-12">
			<h1><?= $articulo->titulo?></h1>
			<div class="content">
				<?=$articulo->contenido?>
			</div>
		</article>
	</section>
	
	<section class="comentarios">
		<div class="container escribir-comentario">
			<form action="<?=base_url()?>comentario/crearPost" method="post">	
				<input type="hidden" name="id_articulo" value="<?= $articulo->id?>"/>					
				<label for="contenido">Escribe un comentario</label>
				<div>DEBUG ID: <?=$_SESSION['usuario']['id']?></div>
				
				<textarea name="contenido" rows="5" cols="150"></textarea>	
				<br>												
				<input type="submit" value="Enviar Comentario">				
			</form>
		</div>
	</section>
	
	
	
</div>