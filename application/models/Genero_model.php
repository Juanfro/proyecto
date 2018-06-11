<?php

class Genero_model extends CI_Model{
	
	public function crear($nombre){
		$genero=R::dispense('genero');
		$genero->nombre=$nombre;
		R::store($genero);
		R::close();
		
	}
	public function getAll($filtro = '') {
		return R::find('genero', "nombre like ?",['%'.$filtro. '%']);
	}	
	
}