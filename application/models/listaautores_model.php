<?php

class listaautores_model extends CI_Model{
	
	public function crear($nombre, $ids_autores, $id_usuario){
		
		$lista = R::dispense('listaautor');
		
		//Datos
		
		$lista->nombre=$nombre;//Titulo de la lista
	
		//Autores en la lista
		foreach ($ids_autores as $id_autor){
			$autor= R::load('autor', $id_autor);
			$lista->sharedAutorList[]=$autor;
		}
		
		//Usuario Creador de la lista
		$usuario = R:: findOne('usuario', 'id =?', [$id_usuario]);
		$lista->usuarioautor = $usuario;
		
		R::store($lista);
		R::close();
		
	}
	
}

?>