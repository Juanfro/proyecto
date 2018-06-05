<div class='container'>

<div class="header col-md-12">
       
                
              
			
			
			<?php $articulos = R::findCollection('articulo','ORDER BY fecha DESC');
			  
			 
				   while ($articulo = $articulos->next()) {
				  
				  echo "<div class='col-md-6' id='informacion'>";
				   	echo $articulo->contenido;
				   echo "</div>";   
				   }?>
			
				
				
				  
            
        
       
    </div>

</div>
