<?php
class libro_model extends CI_model{
	
	public function crear($isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libros=R::dispense('libros');
		$libros->isbn=$isbn;
		$libros->autor=$autor;
		$libros->idioma=$idioma;
		$libros->npalabras=$npalabras;
		$libros->sinopsis=$sinopsis;
		$libros->edicion=$edicion;
		$libros->edadminima=$edadminima;
		R::store($libros);
		R::close();
	}
	
	public  function getAll($filtro){
		return R::find('libros',"autor like ?", ['%' . $filtro . '%']);
		
	
	}
	
	public function getLibrosPorId($id_libros){
      return R::load('libros',$id_libros);
		
	}
	public function modificar($id_libros,$isbn,$autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		$libros= R::load('libros',$id_libros);
		
		$libros->isbn=$isbn;
		$libros->autor=$autor;
		$libros->idioma=$idioma;
		$libros->npalabras=$npalabras;
		$libros->sinopsis=$sinopsis;
		$libros->edicion=$edicion;
		$libros->edadminima=$edadminima;
		
		R::store($libros);
		
	}
	
	public function borrar($id_libros){
		$libros= R::load('libros',$id_libros);
		
		if($libros->id !=0){
			R::trash($libros);
		}
		R::close();
		
	}
}
?>
