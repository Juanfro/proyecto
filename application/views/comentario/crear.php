
<div class="container crear">

	<form class="form" id="idForm" action="<?=base_url()?>comentario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idComentario"> Comentario</label>
			</legend>
			
			<label for="contenido">Contenido</label> 			
			<textarea name="contenido" id="contenido" required="required"></textarea><br><br>
			
		</fieldset>
		<input type="submit" value="comentario"/>
		
	</form>

</div>
