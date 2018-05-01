<?php
 class articulo_model extends CI_Model{
     public function create_articulo($titulo, $contenido){
         $articulo = R::dispense('articulo');
         
         //Datos
         
         $articulo->titulo=$titulo;
         $articulo->contenido=$contenido; //TODO formato
         
         R::store($articulo);
         
         R::close();
     }
     
     
 }