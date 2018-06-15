<div class="container">
	<form class="form" id="idForm" action="<?=base_url()?>Libro/modificarpost" method="post">
		<fieldset>
			<legend>
				<!-- ya con  fieldset -->
				<label for="idlibro"> introducir los datos del libro</label>
			</legend>
			<label for="isbn">ISBN</label>
			<input type="text" name="isbn" id="isbn"  onblur="validarISBN()" value=<?=$libro->isbn ?>></input>
			<div id="pasaFormato"></div>
			<div id="pasaISBN"></div>
			<br> <br>			
			
			<!-- Libro <br>
			$libro
			
			<pre><code>
			<?=print_r($libro)?>
			</code></pre> -->
			
			<!--  Autores del libro <br>
			$libro->sharedAutorList
			<pre><code>
			<?=print_r($libro->sharedAutorList)?>
			</code></pre>-->

			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" value="<?=$libro->titulo ?>"></input><br> <br>
			
			<?php 
				$ides = [];
				foreach($libro->sharedAutorList as $k=>$v){
					$ides[]= $k;
				}
				//echo '<pre><code>' . print_r($ides) .  '</code></pre>'
			?>

			<label for="autorSelect">autor</label>
			<select name="autor[]" id="autorSelect" required="required" multiple="multiple">
				<option value="">Elige un Autor</option>
				<?php foreach ($body['autores'] as $autor): ?>
					<pre><code><?//= print_r($autor)?></code></pre>
					<option value="<?= $autor['id']?>"
						<?= in_array($autor['id'], $ides) ? 'selected' : 'error'?>
					><?=$autor['nombre']?></option>
				<?php endforeach;?>
			</select><br> <br>

			<label for="generoSelect">Género</label>
			<select name="genero[]" id="generoSelect" multiple="multiple">
				<option value="">Elige un género</option>
				<?php foreach ($body['generos'] as $genero):?>
					<option value="<?= $genero['id']?>"><?= $genero['nombre']?></option>
				<?php endforeach;?> 
			</select><br> <br>

			<label for="idioma">Idioma</label>
			<input type="text" name="idioma" id="idioma" value="<?=$libro->idioma?>"></input><br> <br>

			<label for="npalabras">Nº Paginas</label>
			<input type="text" name="npalabras" id="npalabras" value="<?=$libro->npalabras ?>"></input><br> <br>

			<label for="sinopsis">Sinopsis</label>
			<textarea name="sinopsis" id="sinopsis" value="<?=$libro->sinopsis ?>"></textarea><br> <br>			

			<label for="edadminima">Edad Minima Recomendada</label>
			<input type="text" name="edadminima" id="edadminima" value=<?=$libro->edadminima ?>></input><br> <br> 
			
			<input type="hidden" name="id_libro" value="<?=$libro->id?>">
			<input type="submit" value="modificar libro">
		</fieldset>
	</form>


</div>



