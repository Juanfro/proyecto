<?php
class libro_model extends CI_model{
	
	public function crear($isbn,$titulo, $autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libro=R::dispense('libro');
		$libro->isbn=$isbn;
		$libro->titulo=$titulo;
		$libro->autor=$autor;
		$libro->idioma=$idioma;
		$libro->npalabras=$npalabras;
		$libro->sinopsis=$sinopsis;
		$libro->edicion=$edicion;
		$libro->edadminima=$edadminima;
		R::store($libro);
		R::close();
	}
	
	public  function getAll($filtro){
		return R::find('libro',"autor like ?", ['%' . $filtro . '%']);
		
	
	}
	
	public function getlibroPorId($id_libro){
      return R::load('libro',$id_libro);
		
	}
	public function modificar($id_libro,$isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libro= R::load('libro',$id_libro);
		
		$libro->isbn=$isbn;
		$libro->autor=$autor;
		$libro->idioma=$idioma;
		$libro->npalabras=$npalabras;
		$libro->sinopsis=$sinopsis;
		$libro->edicion=$edicion;
		$libro->edadminima=$edadminima;
		
		R::store($libro);
		
	}
	
	public function borrar($id_libro){
		$libro= R::load('libro',$id_libro);
		
		if($libro->id !=0){
			R::trash($libro);
		}
		R::close();
		
	}
}
?>
