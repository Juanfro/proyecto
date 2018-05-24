
<div class="container">



	<form class="form" id="idForm" action="<?=base_url()?>comentario/crearPost" method="post">
		<fieldset>
			<legend>
				<label for="idComentario"> Comentario</label>
			</legend>
			
			<label for="comentario">Contenido</label> 
			
			<div id="summernote"></div>
			
			
			
    <script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>
			
		</fieldset>
		<input type="submit" value="comentario"/>
		
	</form>
	
	
</script>
</div>
