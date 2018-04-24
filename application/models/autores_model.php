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
}
?>