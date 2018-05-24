<?php
class comentario_model extends CI_model{

	public function crear($contenido){
		$comentario=R::dispense('comentario');
		$comentario->comentario=$contenido;
		
		R::store($comentario);
		R::close();
	}

	public  function getAll(){
		return R::findAll('comentario');


	}
	public function getComentarioPorId($id_comentario){
		return R::load('comentario', $id_comentario);
	}

	public function modificar($id_comentario,$contenido){
		$comentario = R::load('comentario',$id_comentario);
		$comentario -> comentario = $contenido;
		
		R::store($comentario);
	}
	 
	public  function borrar ($id_comentario){
		 
		 
		$comentario = R::load("comentario", $id_comentario);
		if($comentario->id !=0){
			R::trash($comentario);
		}
		R::close();
		 
	}
	 
	 
	 
}
?>
