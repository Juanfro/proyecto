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
     
     public function getAll(){
     	return R::findAll('articulo');
     }
     
     public function getArticuloPorId($id_articulo){
     	return R::load('articulo',$id_articulo);
     }
     
     public function modificar($id_articulo,$titulo,$contenido){
     	$articulo=R::load('articulo',$id_articulo);
     	
     	$articulo->titulo=$titulo;
     	$articulo->contenido=$contenido;
     	
     	R::store($articulo);
     }
     public function borrar($id_articulo){
     	
     	$articulo=R::load('articulo',$id_articulo);
     	if($articulo->id !=0){
     		R::trash($articulo);
     	}
     	R::close();
     }
     
     
 }