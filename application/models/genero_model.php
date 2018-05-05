<?php

class genero_model extends CI_Model{
	
	public function crear($nombre){
		$genero=R::dispense('generos');
		$genero->nombre=$nombre;
		R::store($genero);
		R::close();
		
	}
	public function getAll($filtro){
		return R::find('generos',"nombre like ?",['%'.$filtro.'%']);
	}
	
	
	
	
}