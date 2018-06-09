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
		<div class="escribir-comentario">
			<form action="comentario/crearPost">													
				<label for="contenido">Escribe un comentario</label>
				<textarea name="contenido" rows="5" cols="150"></textarea>	
				<br>												
				<input type="submit" value="Enviar">				
			</form>
		</div>
	</section>
	
	
	
</div>