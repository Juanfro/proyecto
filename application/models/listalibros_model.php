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
	public function borrar($id_listar){
		$listar= R::load('listalibros',$id_listar);
	
		if($listar->id !=0){
			R::trash($listar);
		}
		R::close();
	
	}
	
	public function seguir($id_lista, $id_usuario){
		$lista = R::load('listalibros', $id_lista);
		$usuario = R::load('usuario', $id_usuario);
		
		$lista->sharedUsuarioList[]= $usuario;
		
		R::store($lista);
		R::close();
	}
}