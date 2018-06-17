<?php
class Comentario_model extends CI_model{

	public function crear($contenido, $id_artículo, $id_usuario){
		
		//DATOS
		$articulo = R::load('articulo', $id_artículo);
		if($id_usuario!='Anónimo'){
			$usuario = R::load('usuario', $id_usuario);
		}else{
			$usuario= 'Anónimo';
		}
		
		
		
		$comentario=R::dispense('comentario');
		$comentario->fecha=date("Y-m-d H:i:s");
		$comentario->contenido=$contenido;
		$comentario->articulo=$articulo;
		$comentario->usuario=$usuario;
		
		R::store($comentario);
		R::close();
	}

	public  function getAll(){
		return R::findAll('comentario');
	}
	
	/*public function getAllByDate($id_articulo){
		//return  R::findAll('comentario', 'articulo=? ORDER BY fecha DESC'. [$id_articulo]);
		//return R::getAll('select * FROM comentario WHERE articulo=' . $id_articulo . ' ORDER BY fecha DESC;');	
		
		return R::findCollection('comentario', 'ORDER BY fecha DESC ');		
	}*/
	
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
