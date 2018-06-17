<div class="container">
	<section class="articulo col-md-12">
		<article>
			<h1><?= $articulo->titulo?></h1>
			<div class="content">
				<?=$articulo->contenido?>
			</div>
		</article>
	</section>
	
	
	<section class="escribir-comentario">
		<?php if(isset($_SESSION['usuario'])):?>
			
				<div class="container escribir-comentario">
					<form action="<?=base_url()?>comentario/crearPost" method="post">	
						<input type="hidden" name="id_articulo" value="<?= $articulo->id?>"/>					
						<label for="contenido">Escribe un comentario</label>
						<!--<?php if(isset($_SESSION['usuario'])):?>
							<div>DEBUG ID Usuario: <?=$_SESSION['usuario']['id']?></div>
						<?php else:?>
							<div>DEBuG ID Usuario: NO ID</div>
						<?php endif;?>-->
						<textarea name="contenido" id="contenido" ></textarea>	
						<br>												
						<input type="submit" value="Enviar Comentario">				
					</form>
				</div>
			
		<?php endif;?>
	</section>
	
	
	
	<section class="comentarios">
		 <?php
			$id_comentario = $articulo->id;			
			$comentario = R::findCollection('comentario', 'ORDER BY fecha DESC ');
			while ($comentarios = $comentario->next()) {
				$idvcomentario = $comentarios->articulo_id;
				/* echo "longitud de valoraciones ".$longvaloracion; */
				if ($idvcomentario == $id_comentario) {
					$contenido = $comentarios->contenido;
					
					echo  '<div class="comentario">';
						echo  '<div class="comentario-contenido">' . $contenido . "</div>";
						echo '<p class="comentario-firma">Escrito por <a href="' . base_url() . 'Usuario/perfil/' . $comentarios->usuario->id . '">' . $comentarios->usuario->alias .  '</a></p>';
					echo  '</div>';
				}
			}
		?>
		
		 <!--<pre><?= print_r($comentarios)?></pre>
		
		<?php foreach ($comentarios as $comentario):?>
			<div class="comentario">
				<div class="comentario-contenido">
					<?php $comentario->contenido?>
				</div>
				<p class="comentario-firma">
					Escrito por <a href="<?= base_url()?>Usuario/perfil/<?= $comentario->usuario->id?>"><?=$comentario->usuario->alias?></a>
				</p>
			</div>
		<?php endforeach;?> -->
	</section>
	
	
	
</div>