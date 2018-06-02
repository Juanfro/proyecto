<?php
class valoracion_model extends CI_model{

	public function crear($nota,$contenido){ 	//TODO Recibir idUsuario y idLibro
		$valoracion=R::dispense('valoracion');
		$valoracion->nota=$nota;
		$valoracion->contenido=$contenido;
		R::store($valoracion);
		R::close();
	}

	public  function getAll(){
		return R::findAll('valoracion');

	}
	public function getvaloracionPorId($id_valoracion){
		return R::load('valoracion', $id_valoracion);
	}

	public function modificar($id_valoracion,$nota,$contenido){
		$valoracion = R::load('valoracion',$id_valoracion);
		$valoracion -> nota = $nota;
		$valoracion -> contenido = $contenido;
		R::store($valoracion);
	}
	 
	public  function borrar ($id_valoracion){
		 
		 
		$valoracion = R::load("valoracion", $id_valoracion);
		if($valoracion->id !=0){
			R::trash($valoracion);
		}
		R::close();
		 
	}
	 
	 
	 
}
?>