<?php
class autores_model extends CI_model{
	
	public function crear($nombre,$pseudonimo){
		$autores=R::dispense('autores');
		$autores->nombre=$nombre;
		$autores->pseudonimo=$pseudonimo;
		R::store($autores);
		R::close();
	}
	
	public  function getAll($filtro){
		return R::find('autores',"nombre like ?", ['%' . $filtro . '%']);
		
	
	}
	public function getAutoresPorId($id_autores){
		return R::load('autores', $id_autores);
	}
	 
   public function modificar($id_autores,$nombre,$pseudonimo){
   	$autores = R::load('autores',$id_autores);
   	$autores -> nombre = $nombre;
   	$autores -> pseudonimo = $pseudonimo;
   	R::store($autores);
   }
   
   public  function borrar ($id_autores){
   
   
   	$autores = R::load("autores", $id_autores);
   	if($autores->id !=0){
   		R::trash($autores);
   	}
   	R::close();
   
   }
   
   
   
}
?>