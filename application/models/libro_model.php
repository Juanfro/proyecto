<?php
class libro_model extends CI_model{
	
	public function crear($isbn,$titulo,$ids_autor,$idioma,$npalabras,$sinopsis,$edicion,$edadminima){
		
		//Datos
		$libro=R::dispense('libro');
		$libro->isbn=$isbn;
		$libro->titulo=$titulo;
		//$libro->autor=$ids_autor; TODO  Cómo listar El autor en libros?
		$libro->idioma=$idioma;
		$libro->npalabras=$npalabras;
		$libro->sinopsis=$sinopsis;
		$libro->edicion=$edicion;
		$libro->edadminima=$edadminima;
		
		foreach($ids_autor as $id_autor){
			$autor= R::load('autor', $id_autor);
			$libro->sharedAutorList[] = $autor;
		}		
		
		R::store($libro);
		R::close();
	}
	
	public  function getAll($filtro){
		return R::find('libro',"autor like ?", ['%' . $filtro . '%']);	//TODO Filtrar Por título. Según está busca un autor y no está en esta tabla.
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
