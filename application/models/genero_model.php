<?php

class genero_model extends CI_Model{
	
	public function crear($nombre){
		$generos=R::dispense('generos');
		$generos->nombre=$nombre;
		R::store($generos);
		R::close();
		
	}
	public function getAll($filtro){
		return R::find('generos',"nombre like ?",['%'.$filtro.'%']);
	}
	
	
	
	
}