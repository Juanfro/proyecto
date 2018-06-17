
<div class="container crear">

	<form class="form" id="idForm" action="<?=base_url()?>comentario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idComentario"> Comentario</label>
			</legend>
			<div class="form-group">
				<label class="control-label col-sm-2" for="contenido">Contenido</label> 			
				<div class="col-sm-10">
					<textarea  class="form-control col-sm-10 " rows="5" cols="10" name="contenido" id="contenido" required="required"></textarea>
				</div>
			</div>			
		</fieldset>
		<input class="btn" type="submit" value="comentario"/>
		
	</form>

</div>
