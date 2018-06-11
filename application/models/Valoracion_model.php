<?php
class Valoracion_model extends CI_model{

	public function crear($id_libro, $id_usuario, $nota,$contenido){
		
		//DATOS
		$libro = R::load('libro', $id_libro);
		$usuario = R::load('usuario', $id_usuario);
		
		$valoracion=R::dispense('valoracion');
		
		$valoracion->usuario =$usuario;
		$valoracion->libro = $libro;
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