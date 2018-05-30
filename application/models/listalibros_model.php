<?php

class listalibros_model extends CI_Model{
	
	public function crear($nombre, $ids_libros, $id_usuario){
		$lista = R:: dispense('listalibros');
		
		//Usuario creador de la lista
		$usuario = R::findOne('usuario', 'id =?', [$id_usuario]);
		$lista->usuarioautor = $usuario;
		
		//Datos
		$lista->nombre = $nombre;	//Nombre de la lista
		
		//Libros en la lista
		foreach($ids_libros as $id_libro){
			$libro = R::load('libro', $id_libro);
			$lista->sharedLibroList[] = $libro;
		}
		
		R::store($lista);
		R::close();
	}
	
	public function getAll($filtro=''){
		return R::find('listalibros', 'nombre like ?', ['%' . $filtro . '%']);
	}
}