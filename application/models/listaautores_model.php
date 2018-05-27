<?php

class listaautores_model extends CI_Model{
	
	public function crear($nombre, $ids_autores, $id_usuario){
		
		$lista = R::dispense('listaautor');
		//Usuario Creador de la lista
		$usuario = R:: findOne('usuario', 'id =?', [$id_usuario]);
		$lista->usuarioautor = $usuario;
		
		//Datos
		
		$lista->nombre=$nombre;//Titulo de la lista
	   
		//Autores en la lista
		foreach ($ids_autores as $id_autor){
			$autor= R::load('autor', $id_autor);
			$lista->sharedAutorList[]=$autor;
		}
		
		
		
		R::store($lista);
		R::close();
		
	}
	
	public function getAll($filtro=''){
		return R::find('listaautor', 'nombre like ?', ['%' . $filtro . '%']);
	}
	
	public function getlistaPorId($id_lista){
		return R::load('listaautor',$id_lista);
	
	}
	public function modificar($nombre, $autores,$id_lista){
		$lista= R::load('listaautor',$id_lista);
	
		$lista->nombre=$nombre;
		
		//Autores en la lista
		foreach ($ids_autores as $id_autor){
			$autor= R::load('autor', $id_autor);
			$lista->sharedAutorList[]=$autor;
		}
	
		R::store($lista);
		R::close();
	
	}
	
	public function seguir($id_lista, $id_usuario){//TODO
		
	}
	
}

?>