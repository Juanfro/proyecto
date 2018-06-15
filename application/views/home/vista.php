<div class='container'>

<div class="header col-md-12">
       
                
              
			<!-- limite de articulos mostrados -->
			
			<?php $articulos = R::findCollection('articulo','ORDER BY fecha DESC LIMIT 4');
			  
			 
				   while ($articulo = $articulos->next()) {
				  
				  echo "<div class='col-md-3 expandable' id='contarticulo'>";
				   	echo $articulo->contenido;
				   echo "</div>";   
				   }?>
			
				
				
				  
            
        
       
    </div>

</div>
