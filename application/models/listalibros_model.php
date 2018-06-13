<?php

class Listalibros_model extends CI_Model{
	
	public function crear($nombre, $ids_libros, $id_usuario,$descripcion){
		$lista = R:: dispense('listalibros');
		
		//Usuario creador de la lista
		$usuario = R::findOne('usuario', 'id =?', [$id_usuario]);
		$lista->usuario = $usuario;
		
		//Datos
		$lista->nombre = $nombre;	//Nombre de la lista
		$lista->descripcion=$descripcion;
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
	public function getlistaPorId($id_lista) {
		return R::load('listalibros', $id_lista);
	}
	
	public function modificar($nombre, $ids_autores, $id_lista) {
		$lista = R::load('listalibros', $id_lista);
	
		$lista->nombre = $nombre;
	
		if($lista->id !=0){
			R::trash($lista);
		}
	
		// Autores en la lista
		foreach ($ids_autores as $id_autor) {
			$libro = R::load('libro', $id_autor);
			$lista->sharedLibroList[] = $libro;
		}
	
		R::store($lista);
		R::close();
	}
}