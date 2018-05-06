<?php
class entradablog_model extends CI_Model{
	
	public function crear($titulo, $contenido){
		$entrada = R::dispense('entrada');
		$entrada->titulo = $titulo;
		$entrada->contenido = $contenido;
		
		R::store($entrada);
		R::close();
	}
}