<?php

class Listaautores_model extends CI_Model {

	public function crear($nombre, $ids_autores, $id_usuario,$descripcion) {
		$lista = R::dispense('listaautor');
		
		// Usuario Creador de la lista
		$usuario = R::findOne('usuario', 'id =?', [$id_usuario]);
		$lista->usuario = $usuario;
		
		// Datos		
		$lista->nombre = $nombre; // Titulo de la lista
		$lista->descripcion=$descripcion;
		                        
		// Autores en la lista
		foreach ($ids_autores as $id_autor) {
			$autor = R::load('autor', $id_autor);
			$lista->sharedAutorList[] = $autor;
		}
		
		R::store($lista);
		R::close();
	}

	public function getAll($filtro = '') {
		return R::find('listaautor', 'nombre like ?', [
			'%' . $filtro . '%'
		]);
	}

	public function getlistaPorId($id_lista) {
		return R::load('listaautor', $id_lista);
	}

	public function modificar($nombre, $ids_autores, $id_lista) {
		$lista = R::load('listaautor', $id_lista);
		$lista->sharedAutorList =[];
		R::store($lista);
		
		$lista->nombre = $nombre;
		
		
		// Autores en la lista
		foreach ($ids_autores as $id_autor) {
			$autor = R::load('autor', $id_autor);
			$lista->sharedAutorList[] = $autor;
		}
		
			
		
		
		
		R::store($lista);
		R::close();
	}

	public function borrar($id_listar){
		$listar= R::load('listaautor',$id_listar);
	
		if($listar->id !=0){
			R::trash($listar);
		}
		R::close();
	
	}
	
	
	public function seguir($id_lista, $id_usuario) {
		$lista = R::load('listaautor', $id_lista);
		$usuario = R::load('usuario', $id_usuario);

		
		$lista->sharedUsuarioList[] = $usuario;
		
		R::store($lista);
		R::close();
	}
}

?>