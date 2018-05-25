
<div class="container">



	<form class="form" id="idForm" action="<?=base_url()?>comentario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idComentario"> Comentario</label>
			</legend>
			
			<label for="comentario">Contenido</label> 
			
			<textarea name="contenido" id="contenido" required="required"></textarea><br><br>	
			
			
		</fieldset>
		<input type="submit" value="comentario"/>
		
	</form>
	
	
</script>
</div>
